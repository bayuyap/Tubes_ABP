<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use DB;
use App\Models\User;
use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TicketController extends Controller
{
    public function formticket()
    {
        return view('ticket.index', [
            'title' => 'Formticket',
            'active' => 'formticket'
        ]);
    }

    public function store(Request $request)
    {
        $user_id = auth()->user()->id;
        $qr_code = Str::random(20);
        Ticket::create([
            'qr_code' => $qr_code,
            'user_id' => $user_id,
            'name' => $request->input('name'),
            'role' => $request->input('role')
        ]);

        return redirect('/send/tickets');
    }

    public function show()
    {

        // $scan = Ticket::latest();

        // if (request('scan')) {
        //     $scan->where('qr_code', 'like' . request('scan'));
        //     Ticket::all();
        // }
        return view('ticket', [
            'title' => 'Ticket',
            'active' => 'ticket',
            'tickets' => Ticket::where('user_id', auth()->user()->id)->get()
        ]);
    }
    // public function validasiQrcode(Request $request)
    // {
    //     $ticket = Ticket::where("qr_code", $request->qr_code)->first();

    //     // dd($request->qr_code);
    //     if ($ticket == null) {
    //         return response()->json([
    //             "status_error" => "gagal check-in"
    //         ]);
    //     }
    // }
}

<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class ScanController extends Controller
{

    public function index()
    {

        $scan = Ticket::latest();

        if (request('scan')) {
            $scan->where('qr_code', 'like', '%' . request('scan') . '%');
        }

        return view('scan.list', [
            'title' => 'List',
            'active' => 'list',
            'tickets' => $scan->get()
        ]);
    }
}

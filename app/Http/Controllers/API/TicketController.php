<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Ticket;
use App\Models\User;
use App\Http\Resources\TicketResource;
use Illuminate\Support\Str;
class TicketController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Ticket::latest()->get();
        return response()->json( TicketResource::collection($data));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $user_id = auth()->user()->id;
        $qr_code = Str::random(20);
        $role = 'Guest';

        $ticket = Ticket::create([
            'qr_code' => $qr_code,
            'user_id' => $user_id,
            'name' => $request->name,
            'role' => $role
        ]);


        return response()->json(['Ticket Created Successfully', new TicketResource($ticket)]);
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ticket = Ticket::find($id);
        if (is_null($ticket)) {
            return response()->json('Data not found', 404);
        }
        return response()->json(['data' => [TicketResource($ticket)]], 200);
    }
}

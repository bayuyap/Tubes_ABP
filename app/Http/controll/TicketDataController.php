<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class TicketDataController extends Controller
{
    public function sendTicketNotification()
    {
        $user = User::first();

        $ticketData = [
            'body' => 'Here is Your Ticket For Event',
            'ticketText' => 'Ticket',
            'url' => url('/myticket'),
            'thankyou' => 'Please Click Link Below To get Your Ticket'
        ];
        Alert::success('Congrats', 'Please check My Ticket to see your ticket');
        return redirect('/');
    }
    public function store(Request $request)
    {
    }
}

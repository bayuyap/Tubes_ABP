<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class TicketDataController extends Controller
{
    public function sendTicketNotification()
    {
        $user = User::first();

        $ticketData = [
            'body' => 'Here is Your Ticket For Event',
            'ticketText' => 'Ticket',
            'url' => url('/ticket'),
            'thankyou' => 'Please Klick Link Below To get Your Ticket'
        ];

        Notification::send(request()->user(), new Ticket($ticketData));
        session()->flash('Your purchase successfuly', 'Please check registered email');

        return redirect('/');
    }
}

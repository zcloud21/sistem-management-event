<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TicketController extends Controller
{
    public function show(Ticket $ticket)
    {
        $ticket->load('guest.event');

        // Generate QR code berdasarkan KODE TIKET (UUID)
        $qrCode = QrCode::size(250)
            ->format('svg')
            ->generate($ticket->ticket_code);

        return view('tickets.show', compact('ticket', 'qrCode'));
    }
}

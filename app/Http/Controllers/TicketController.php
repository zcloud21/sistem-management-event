<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TicketController extends Controller
{
    use AuthorizesRequests;
    public function show(Ticket $ticket)
    {
        if (!auth()->user()->can('view', $ticket)) {
            abort(403);
        }

        $ticket->load('guest.event');

        // Generate QR code berdasarkan KODE TIKET (UUID)
        $qrCode = QrCode::size(250)
            ->format('svg')
            ->generate($ticket->ticket_code);
        
        // Sanitize SVG to prevent XSS - remove any potential script tags
        $qrCode = $this->sanitizeSvg($qrCode);

        return view('tickets.show', compact('ticket', 'qrCode'));
    }
    
    /**
     * Sanitize SVG content to prevent XSS
     */
    private function sanitizeSvg($svgContent)
    {
        // Remove potentially dangerous tags and attributes
        $svgContent = preg_replace('/<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/mi', '', $svgContent);
        $svgContent = preg_replace('/<iframe\b[^<]*(?:(?!<\/iframe>)<[^<]*)*<\/iframe>/mi', '', $svgContent);
        $svgContent = preg_replace('/javascript:/i', '', $svgContent);
        $svgContent = preg_replace('/vbscript:/i', '', $svgContent);
        $svgContent = preg_replace('/on\w+\s*=/i', '', $svgContent);
        
        return $svgContent;
    }
}

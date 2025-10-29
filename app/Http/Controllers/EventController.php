<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Vendor;
use App\Models\Venue;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::with(['user', 'venue'])
            ->latest()
            ->paginate(10);

        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $venues = Venue::orderBy('name')->get();
        return view('events.create', compact('venues'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'event_name' => 'required|string|max:255',
            'venue_id' => 'nullable|exists:venues,id', // 'nullable' lebih baik (sesuai migrasi)
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
            'description' => 'nullable|string',
        ]);

        $request->user()->events()->create($validated);

        return redirect()->route('events.index')->with('success', 'Event berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     * (Halaman detail event untuk menampilkan daftar tamu)
     */
    public function show(Event $event)
    {
        $event->load('guests.ticket', 'vendors');

        $all_vendors = Vendor::orderBy('name')->get();
        return view('events.show', compact('event', 'all_vendors'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        $venues = Venue::orderBy('name')->get();
        return view('events.edit', compact('event', 'venues'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $validated = $request->validate([
            'event_name' => 'required|string|max:255',
            'venue_id' => 'nullable|exists:venues,id',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
            'description' => 'nullable|string',
        ]);

        $event->update($validated);

        return redirect()->route('events.index')->with('success', 'Event berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('events.index')->with('success', 'Event berhasil dihapus.');
    }

    public function assignVendor(Request $request, Event $event)
    {
        $request->validate([
            'vendor_id' => 'required|exists:vendors,id',
            'agreed_price' => 'nullable|numeric|min:0',
            'contract_details' => 'nullable|string',
        ]);

        $event->vendors()->attach($request->vendor_id, [
            'agreed_price' => $request->agreed_price,
            'contract_details' => $request->contract_details,
            'status' => 'Negotiation',
        ]);

        return back()->with('success', 'Vendor berhasil ditugaskan ke event.');
    }


    public function detachVendor(Event $event, Vendor $vendor)
    {
        $event->vendors()->detach($vendor->id);

        return back()->with('success', 'Vendor berhasil dihapus dari event.');
    }
}

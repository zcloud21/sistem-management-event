<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\VenueController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('venues', VenueController::class);
    Route::resource('events', EventController::class)->except(['show']);
    Route::get('events/{event}', [EventController::class, 'show'])->name('events.show');
    Route::get('events/{event}/guests/import', [GuestController::class, 'showImportForm'])->name('events.guests.import.form');
    Route::get('/events/{event}/guests/{guest}/edit', [GuestController::class, 'edit'])
        ->name('events.guests.edit');
    Route::patch('/events/{event}/guests/{guest}', [GuestController::class, 'update'])
        ->name('events.guests.update');
    Route::post('events/{event}/guests/import', [GuestController::class, 'import'])->name('events.guests.import');
    Route::resource('events.guests', GuestController::class)->except(['index']);
});
Route::get('tickets/{ticket}', [TicketController::class, 'show'])->name('tickets.show');

require __DIR__ . '/auth.php';

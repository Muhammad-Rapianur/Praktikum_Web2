<?php

use App\Http\Controllers\SessionController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

Route::get('/tickets', [TicketController::class, 'index'])
    ->name('tickets.index');

Route::get('/tickets/{ticket}', [TicketController::class, 'show'])
    ->whereNumber('ticket')
    ->name('tickets.show');

Route::get('/api/tickets/{ticket}', [TicketController::class, 'showJson'])
    ->whereNumber('ticket')
    ->name('tickets.show-json');

Route::pattern('ticket', '[0-9]+');

Route::resource('tickets', TicketController::class);

Route::post('/login', [SessionController::class, 'login'])
    ->middleware('throttle:api-login');

Route::post('/logout', [SessionController::class, 'logout'])
    ->middleware('auth:web');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['arpm'], function () {
    Route::get('event', [EventController::class, 'index'])->name('event');
    Route::get('event-list', [EventController::class, 'event_list']);
    Route::post('event', [EventController::class, 'save_event']);
    Route::get('all-event', [EventController::class, 'all_event'])->name('all-event');
    Route::get('single-event/{id}', [EventController::class, 'single_event']);
    Route::post('update-event', [EventController::class, 'update_event']);
    Route::delete('delete-event/{id}', [EventController::class, 'delete_event']);
});
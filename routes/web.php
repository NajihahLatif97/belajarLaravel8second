<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ParticipantsController;
use App\Models\EventModel;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::middleware(['auth'])->group(function(){

    // Eloquent
    Route::get('/db-query', function(){
        // $eventM = EventModel::all();
        // $eventM = EventModel::find(); 
        $eventM = DB::table('events')->get();
        // $eventM = EventModel::where('title','LIKE','Pesta Muda Mudi')->get();  
        dd($eventM);
    });


Route::get('/events',[EventsController::class, 'index'])->name('events.index');
Route::get('/events/tambah-event',[EventsController::class, 'create'])->name('events.create');
Route::POST('/events/store-event',[EventsController::class, 'store'])->name('events.store');
Route::get('/events/edit-event/{id}',[EventsController::class, 'edit'])->name('events.edit');
Route::POST('/events/update-event',[EventsController::class, 'update'])->name('events.update');
Route::get('/events/delete-event/{id}',[EventsController::class, 'delete'])->name('events.delete');

Route::get('/participants',[ParticipantsController::class, 'index'])->name('participants.index');
Route::get('/participants/tambah-participant/{id}',[ParticipantsController::class, 'create'])->name('participants.create');
Route::POST('/participants/store-participant',[ParticipantsController::class, 'store'])->name('participants.store');
Route::get('/participants/edit-participant/{id}',[ParticipantsController::class, 'edit'])->name('participants.edit');
Route::POST('/participants/update-participant',[ParticipantsController::class, 'update'])->name('participants.update');
Route::get('/participants/delete-participant/{id}',[ParticipantsController::class, 'delete'])->name('participants.delete');

// Route::get('/events', function () {
//     return 'events';
// });

});

// view ni boleh dikeluarkan selepas middleware auth
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\BlogController;
use \App\Http\Controllers\EventController;
use \App\Http\Controllers\EventTypeController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('pages/widgets.html', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('pages/widgets.html');




Route::get('/blogs',[BlogController::class,'index'])->name('blogs.index');
Route::any('/blogs/create',[BlogController::class,'create'])->name('blogs.create');
Route::any('/blogs/delete/{id}',[BlogController::class,'destroy'])->name('blogs.delete');
Route::post('/blogs/store',[BlogController::class,'store'])->name('blogs.store');
Route::any('/blogs/edit/{id}',[BlogController::class,'edit'])->name('blogs.edit');
Route::post('/blogs/update',[BlogController::class,'update'])->name('blogs.update');



Route::get('/events',[EventController::class,'index'])->name('events.index');
Route::get('/events/getEventsJson',[EventController::class,'getEventsJson'])->name('events.getEventsJson');
Route::any('/events/delete/{id}',[EventController::class,'destroy'])->name('events.destroy');
Route::any('/events/create',[EventController::class,'create'])->name('events.create');
Route::any('/events/store',[EventController::class,'store'])->name('events.store');
Route::any('/events/edit/{id}',[EventController::class,'edit'])->name('events.edit');
Route::post('/events/update',[EventController::class,'update'])->name('events.update');



Route::get('/eventTypes',[EventTypeController::class,'index'])->name('eventTypes.index');
Route::get('/eventTypes/getEventTypesJson',[EventTypeController::class,'getEventTypesJson'])->name('eventTypes.getEventTypesJson');
Route::any('/eventTypes/delete/{id}',[EventTypeController::class,'destroy'])->name('eventTypes.destroy');
Route::any('/eventTypes/create',[EventTypeController::class,'create'])->name('eventTypes.create');
Route::post('/eventTypes/store',[EventTypeController::class,'store'])->name('eventTypes.store');
Route::any('/eventTypes/edit/{id}',[EventTypeController::class,'edit'])->name('eventTypes.edit');
Route::post('/eventTypes/update',[EventTypeController::class,'update'])->name('eventTypes.update');



require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventosController;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('eventos.disponibles');
    }
    return redirect()->route('login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Ruta para ver el detalle del evento
Route::get('/evento/{id}', function ($id) {
    return view('evento-detalle');
})->name('evento.detalle');

// Ruta temporal para ver la vista sin autenticación
Route::get('/evento-demo', function () {
    return view('evento-detalle');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/eventos-disponibles', function () {
    return view('eventos-disponibles');
})->middleware('auth')->name('eventos.disponibles');


require __DIR__.'/auth.php';

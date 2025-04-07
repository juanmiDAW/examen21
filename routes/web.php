<?php

use App\Http\Controllers\AlumnoController;
use App\Models\Alumno;
use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\returnSelf;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
Route::resource('alumnos', AlumnoController::class);

Route::get('alumno/criterios/{id}', AlumnoController::class, function(Alumno $id){
    $notas = Alumno::with('notas')->where('id', $id)->get();
    return view('alumnos.notas', ['notas'=>$notas]);
})->name('alumnos.notas');

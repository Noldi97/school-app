<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ClasseController;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

    Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');


    Route::prefix('enseignant')->group(function (){
        Route::get('list', [EnseignantController::class, 'index'])->name('enseignant.index');
        Route::get('create', [EnseignantController::class, 'create'])->name('enseignant.create');
        Route::get('edit/{id}', [EnseignantController::class, 'edit'])->name('enseignant.edit');
        Route::post('store', [EnseignantController::class, 'store'])->name('enseignant.store');
        Route::put('update/{id}', [EnseignantController::class, 'update'])->name('enseignant.update');
        Route::delete('destroy/{id}', [EnseignantController::class, 'destroy'])->name('enseignant.destroy');
    });

    Route::prefix('etudiant')->group(function (){
        Route::get('list', [EtudiantController::class, 'index'])->name('etudiant.index');
        Route::get('create', [EtudiantController::class, 'create'])->name('etudiant.create');
        Route::get('edit/{id}', [EtudiantController::class, 'edit'])->name('etudiant.edit');
        Route::post('store', [EtudiantController::class, 'store'])->name('etudiant.store');
        Route::put('update/{id}', [EtudiantController::class, 'update'])->name('etudiant.update');
        Route::delete('destroy/{id}', [EtudiantController::class, 'destroy'])->name('etudiant.destroy');
    });

    Route::prefix('classe')->group(function (){
        Route::get('list', [ClasseController::class, 'index'])->name('classe.index');
        Route::get('create', [ClasseController::class, 'create'])->name('classe.create');
        Route::get('edit/{id}', [ClasseController::class, 'edit'])->name('classe.edit');
        Route::post('store', [ClasseController::class, 'store'])->name('classe.store');
        Route::put('update/{id}', [ClasseController::class, 'update'])->name('classe.update');
        Route::delete('destroy/{id}', [ClasseController::class, 'destroy'])->name('classe.destroy');
    });

});

require __DIR__.'/auth.php';

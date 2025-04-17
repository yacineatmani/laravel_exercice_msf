<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BatimentController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\TypeFormationController;
use App\Http\Controllers\EleveController;

Route::get('/batiments', [BatimentController::class, 'index'])->name('batiments.index');
Route::get('/formations', [FormationController::class, 'index'])->name('formations.index');
Route::get('/typeformations', [TypeFormationController::class, 'index'])->name('typeformations.index');
Route::get('/eleves', [EleveController::class, 'index'])->name('eleves.index');
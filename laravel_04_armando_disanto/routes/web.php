<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\IndiceController;
use Illuminate\Support\Facades\Route;



Route::get('/', [Controller::class, 'welcome'])->name('welcome');
Route::get('/indiceArticoli', [IndiceController::class, 'indiceArticoli'])->name('indiceArticoli');
Route::get('/IndiceArticoli/detailArt/{article}', [IndiceController::class, 'detailArt'])->name('Dettagli');

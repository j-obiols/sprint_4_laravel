<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartitController;
use App\Http\Controllers\EquipController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, '__invoke'])->name('inici');

Route::get('equips', [EquipController::class, 'index'])->name('equips.index');

Route::get('equips/classificacio', [EquipController::class, 'classificacio'])->name('equips.classificacio');

Route::get('equips/create', [EquipController::class, 'create'])->name('equips.create');

Route::post('equips', [EquipController::class, 'store'])->name('equips.store');

Route::get('equips/{equip}', [EquipController::class, 'show'])->name('equips.show');

Route::get('equips/{equip}/edit', [EquipController::class, 'edit'])->name('equips.edit');

Route::put('equips/{equip}', [EquipController::class, 'update'])->name('equips.update');

Route::delete('equips/{equip}', [EquipController::class, 'destroy'])->name('equips.destroy');


//Rutes Partits

Route::get('partits', [PartitController::class, 'index'])->name('partits.index');

Route::get('partits/calendari', [PartitController::class, 'calendari'])->name('partits.calendari');

Route::get('partits/resultats', [PartitController::class, 'resultats'])->name('partits.resultats');

Route::get('partits/create', [PartitController::class, 'create'])->name('partits.create');

Route::post('partits', [PartitController::class, 'store'])->name('partits.store');

Route::get('partits/{partit}', [PartitController::class, 'show'])->name('partits.show');

Route::get('partits/{partit}/edit', [PartitController::class, 'edit'])->name('partits.edit');

Route::put('partits/{partit}', [PartitController::class, 'update'])->name('partits.update');

Route::delete('partits/{partit}', [PartitController::class, 'destroy'])->name('partits.destroy');
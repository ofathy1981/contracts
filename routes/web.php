<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContractController;
use App\Models\workdomain_fees;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\ContractController::class, 'index'])->name('home');
Route::get('/add', [App\Http\Controllers\ContractController::class, 'create'])->name('create');


Route::resource('contract',ContractController::class);

Route::get('contract/soft/delete/{id}',[ContractController::class,('softdelete')])->name('soft.delete');

//Route::get('thetrash',[ContractController::class,('trash')])->name('contract.trash');

//Route::get('untrash/{id}',[ContractController::class,('unsoftdelete')])->name('contract.unsoftdelete');

//Route::get('forcedel/{id}',[ContractController::class,('deletetrashed')])->name('contract.forcedel');

Route::get('create',[ContractController::class,('create')])->name('contract.create');
Route::delete('/service/{id}',[workdomain_fees::class,'destroy'])->name('workdomain_fees.destroy');
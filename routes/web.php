<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeController;

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

Route::get('/', function () {
    return view('welcome');
});

// COMPANY
Route::resource('Company', CompanyController::class)->except('show');

Route::controller(CompanyController::class)->group(function(){
    Route::get('/destroy/{id}', [CompanyController::class, 'destroy'])->name('company.destroy');
});

// EMPLOYEEE

Route::controller(EmployeController::class)->group(function(){
    Route::get('/employe/index', [EmployeController::class, 'index'])->name('employe.index');
    Route::get('/employe/create', [EmployeController::class, 'create'])->name('employe.create');
    Route::POST('/employe/store', [EmployeController::class, 'store'])->name('employe.store');
    Route::get('/employe/edit/{id}', [EmployeController::class, 'edit'])->name('employe.edit');
    Route::POST('/employe/update/{id}', [EmployeController::class, 'update'])->name('employe.update');
    Route::get('/employe/destroy/{id}', [EmployeController::class, 'destroy'])->name('employe.destroy');
});


Route::get('/dashboard', function () {
    return view('backenddashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/auth.php';

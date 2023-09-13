<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\RoleController;

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
})->name('top');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('employe/mypost', [EmployeController::class,'mypost'])->name('employe.mypost');
    Route::get('employe/trash', [EmployeController::class,'getDelete'])->name('employe.getDelete');
    Route::get('employe/{employ}/deleteShow', [EmployeController::class,'deleteShow'])->name('employe.deleteShow');
    Route::get('employe/{employ}/revival', [EmployeController::class,'revival'])->name('employe.revival');
    Route::delete('employe/{employ}/delete', [EmployeController::class,'delete'])->name('employe.delete');
    Route::get('employe/{employe}/newringi', [EmployeController::class,'newringi'])->name('employe.newringi');
    Route::get('employe/{employe}/bunai', [EmployeController::class,'bunai'])->name('employe.bunai');
    Route::get('employe/{employe}/hakenmoto', [EmployeController::class,'hakenmoto'])->name('employe.hakenmoto');
    Route::get('employe/{employe}/ringi', [EmployeController::class,'ringi'])->name('employe.ringi');
    Route::get('employe/index1', [EmployeController::class,'index1'])->name('employe.index1');
    Route::get('employe/index1company', [EmployeController::class,'index1company'])->name('employe.index1company');
    Route::get('employe/index1section', [EmployeController::class,'index1section'])->name('employe.index1section');
    Route::get('employe/index1fday', [EmployeController::class,'index1fday'])->name('employe.index1fday');
    Route::get('employe/index1endDay', [EmployeController::class,'index1endDay'])->name('employe.index1endDay');
    Route::get('employe/index1hcost', [EmployeController::class,'index1hcost'])->name('employe.index1hcost');
    Route::get('employe/index2', [EmployeController::class,'index2'])->name('employe.index2');
    Route::get('employe/index2company', [EmployeController::class,'index2company'])->name('employe.index2company');
    Route::get('employe/index2section', [EmployeController::class,'index2section'])->name('employe.index2section');
    Route::get('employe/index2fday', [EmployeController::class,'index2fday'])->name('employe.index2fday');
    Route::get('employe/index2eday', [EmployeController::class,'index2eday'])->name('employe.index2eday');
    Route::get('employe/index2hcost', [EmployeController::class,'index2hcost'])->name('employe.index2hcost');
    Route::get('employe/index3', [EmployeController::class,'index3'])->name('employe.index3');
    Route::get('employe/index3company', [EmployeController::class,'index3company'])->name('employe.index3company');
    Route::get('employe/index3section', [EmployeController::class,'index3section'])->name('employe.index3section');
    Route::get('employe/index3fday', [EmployeController::class,'index3fday'])->name('employe.index3fday');
    Route::get('employe/index3eday', [EmployeController::class,'index3eday'])->name('employe.index3eday');
    Route::get('employe/index3hcost', [EmployeController::class,'index3hcost'])->name('employe.index3hcost');


    Route::get('employe/indexcompany', [EmployeController::class,'indexcompany'])->name('employe.indexcompany');
    Route::get('employe/indexsection', [EmployeController::class,'indexsection'])->name('employe.indexsection');
    Route::get('employe/indexfday', [EmployeController::class,'indexfday'])->name('employe.indexfday');
    Route::get('employe/indexeday', [EmployeController::class,'indexeday'])->name('employe.indexeday');
    Route::get('employe/indexhcost', [EmployeController::class,'indexhcost'])->name('employe.indexhcost');

    Route::resource('employe', EmployeController::class);

    Route::get('profile/{user}/edit',[ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('profile/{user}',[ProfileController::class, 'update'])->name('profile.update');
    //管理者用画面
    Route::middleware(['can:admin'])->group(function(){
        Route::get('profile/index', [ProfileController::class, 'index'])->name('profile.index');
        Route::delete('profile/{user}', [ProfileController::class, 'Userdelete'])->name('profile.delete');
        Route::patch('roles/{user}/attach', [RoleController::class, 'attach'])->name('role.attach');
        Route::patch('roles/{user}/detach', [RoleController::class, 'detach'])->name('role.detach');
    });
    
    

});



require __DIR__.'/auth.php';

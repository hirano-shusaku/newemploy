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
    Route::get('employe/index2', [EmployeController::class,'index2'])->name('employe.index2');
    Route::get('employe/index3', [EmployeController::class,'index3'])->name('employe.index3');
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

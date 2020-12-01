<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\backendController;
use App\Http\Controllers\backend\AdduserController;
use App\Http\Controllers\backend\profileController;

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
    return view('auth.login');
});
Route::group(['middleware'=>['auth']],function(){
    Route::get('/home', [backendController::class, 'index'])->name('home');
    Route::prefix('users')->group(function(){
        Route::get('/add', [AdduserController::class, 'addUser'])->name('add.user');
        Route::post('/store', [AdduserController::class, 'storeUser'])->name('store.user');
        Route::get('/edit/{id}', [AdduserController::class, 'editUser'])->name('edit.user');
        Route::post('/update/{id}', [AdduserController::class, 'updateUser'])->name('update.user');
        Route::get('/list', [AdduserController::class, 'listUser'])->name('list.user');
        Route::post('/delete', [AdduserController::class, 'deleteUser'])->name('delete.user');
        
    });
    Route::prefix('profiles')->group(function(){
        Route::get('/view', [profileController::class, 'profileView'])->name('profile.view');
        Route::post('/update/{id}', [profileController::class, 'profileUpdate'])->name('profile.update');
        Route::get('/change/password', [profileController::class, 'ChangePass'])->name('change.pass');
        Route::post('/password/store', [profileController::class, 'PassStore'])->name('pass.store');
        
    });
    
});

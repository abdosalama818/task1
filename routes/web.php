<?php

use App\Http\Controllers\Home\MainController;
use Illuminate\Support\Facades\Route;

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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::middleware(['auth'])->group(function () {


    Route::get('/',[MainController::class,'index']);
    Route::get('/show_cat',[MainController::class,'show_cat']);
    Route::post('/add_cat',[MainController::class,'add_cat']);
    Route::get('/cat',[MainController::class,'show_all_cat']);

    Route::get('/show_edit_cat/{id}',[MainController::class,'show_edit_cat']);

    Route::post('/update/cat/{id}',[MainController::class,'update_cat']);
    Route::get('/delete/cat/{id}',[MainController::class,'delete_cat']);




    Route::get('/post',[MainController::class,'show_post']);
    Route::get('/add/post',[MainController::class,'add_post']);
    Route::post('/save/post',[MainController::class,'save_post']);

    Route::get('/edit/post/{id}',[MainController::class,'edit_post']);
    Route::post('/add/post/{id}',[MainController::class,'save_edit_post']);
    Route::post('/delete/post/{id}',[MainController::class,'delete_post']);




    Route::get('/comments',[MainController::class,'show_comment']);
    Route::get('/comment/action/{id}',[MainController::class,'show_comment_action']);

    Route::post('approved/commnet/{id}',[MainController::class,'approved_commnet']);

    Route::post('canceled/commnet/{id}',[MainController::class,'canceled_commnet']);





    Route::get('admin/prifile',[MainController::class,'show_profile']);







});


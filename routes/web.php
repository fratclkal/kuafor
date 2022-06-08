<?php

use App\Http\Controllers\AdminPanelController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/panel',[AdminPanelController::class,'index']);

//Route::get('/panel/iletisim', [AdminPanelController::class,'contact'])->name('contact');
Route::post('/panel/iletisim', [AdminPanelController::class,'createContact'])->name('createContact');
Route::get('/panel/iletisim' , [AdminPanelController::class,'listContact'])->name('listContact');

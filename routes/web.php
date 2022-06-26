<?php

use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\HomePageController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/panel',[AdminPanelController::class,'index']);

//Route::get('/panel/iletisim', [AdminPanelController::class,'contact'])->name('contact');
Route::post('/panel/iletisim', [AdminPanelController::class,'createContact'])->name('createContact');
Route::get('/panel/iletisim' , [AdminPanelController::class,'listContact'])->name('listContact');
Route::get('/panel/iletisim/guncelle/{id}', [AdminPanelController::class,'updateShowContact']);
Route::post('/panel/iletisim/guncelle/{id}', [AdminPanelController::class,'updateContact'])->name('updateContact');

//Route::get('panel/hakkimizda', [AdminPanelController::class,'about'])->name('about');
Route::get('/panel/hakkimizda', [AdminPanelController::class,'listAbout'])->name('listAbout');
Route::post('/panel/hakkimizda', [AdminPanelController::class,'createAbout'])->name('createAbout');
Route::get('/panel/hakkimizda/guncelle/{id}', [AdminPanelController::class,'updateShowAbout']);
Route::post('/panel/hakkimizda/guncelle/{id}', [AdminPanelController::class,'updateAbout'])->name('updateAbout');

Route::get('/panel/yorumlar', [AdminPanelController::class,'listMessage'])->name('listMessage');

//Route::get('/panel/fiyat-listesi', [AdminPanelController::class,'price'])->name('price');
Route::get('/panel/fiyat-listesi', [AdminPanelController::class,'listPrice'])->name('listPrice');
Route::post('/panel/fiyat-listesi', [AdminPanelController::class,'createPrice'])->name('createPrice');
Route::get('/panel/fiyat-listesi/{id}', [AdminPanelController::class,'deletePrice']);
Route::post('/panel/fiyat-listesi/{id}', [AdminPanelController::class,'deletePrice']) ->name('deletePrice');

Route::get('/panel/galeri', [AdminPanelController::class,'gallery'])->name('panel_gallery');
Route::post('/panel/galeri', [AdminPanelController::class,'createGallery'])->name('createGallery');
Route::get('/panel/galeri/galeri-listesi', [AdminPanelController::class,'listGallery'])->name('listGallery');
Route::get('/panel/galeri/sil/{id}', [AdminPanelController::class,'deleteGallery']);
Route::post('/panel/galeri/sil/{id}', [AdminPanelController::class,'deleteGallery'])->name('deleteGallery');
Route::get('/panel/galeri/guncelle/{id}', [AdminPanelController::class,'updateShowGallery']);
Route::post('/panel/galeri/guncelle/{id}', [AdminPanelController::class,'updateGallery'])->name('updateGallery');

Route::get('/panel/iletisim-istekleri', [AdminPanelController::class,'listInformation'])->name('information');
Route::get('/panel/iletisim-istekleri/sil/{id}', [AdminPanelController::class,'deleteInformation']);
Route::post('/panel/iletisim-istekleri/sil/{id}', [AdminPanelController::class,'deleteInformation'])->name('deleteInformation');


//HomePage
Route::get('/', [HomePageController::class,'homepage'])->name('index');
//Route::get('/anasayfadeneme', [HomePageController::class,'frontApp'])->name('frontApp'); silinecekss
Route::get('/iletisim', [HomePageController::class,'contact'])->name('contact');
Route::post('/iletisim', [HomePageController::class,'createInformation'])->name('createInformation');
Route::get('/fotograflar', [HomePageController::class,'gallery'])->name('gallery');
Route::get('/hakkimizda', [HomePageController::class,'about'])->name('about');
Route::get('/yorumlar', [HomePageController::class,'message'])->name('message');
Route::get('/yorumlar', [HomePageController::class,'messageList'])->name('messageList');
Route::post('/yorumlar', [HomePageController::class,'createMessage'])->name('createMessage');
Route::get('/fiyat-listesi', [HomePageController::class,'price'])->name('price');



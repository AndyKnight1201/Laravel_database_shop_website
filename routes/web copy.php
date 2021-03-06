<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ZeldaController;
use App\Http\Controllers\microsoftController;
use App\Http\Controllers\BootstrapCut_Controller;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CommodityController;




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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/test', function () {
//     return view('welcome');
// });
// Route::get('/say', function () {
//     return "hi";
// });

// Route::get('/mic', function () {
//     return view('microsoft_Fin');
// });
// Route::get('/', "Controllers@index");
Route::get('/', [Controller::class, 'index']);
Route::get('/microsoft', [microsoftController::class, 'mic']);

Route::get('/Zedla', [ZeldaController::class, 'Ze']);
Route::get('/ZedlaCP', [ZeldaController::class, 'ZeCp']);
Route::get('/ZedlaGanon', [ZeldaController::class, 'ZeGa']);
Route::get('/ZedlaHyrule', [ZeldaController::class, 'ZeHy']);

// ----------------------------------------------------------------------------------------------
// Bootstrap-Cut
Route::get('/Bootstrap-Cut-Login', [Controller::class, 'BswL']);

Route::get('/Bootstrap-Cut-index', [BootstrapCut_Controller::class, 'BswI' ,'commodity']);


Route::get('/Bootstrap-Cut-cart', [BootstrapCut_Controller::class, 'BswC']);
Route::get('/Bootstrap-Cut-cartTwo', [BootstrapCut_Controller::class, 'BswCTw']);
Route::get('/Bootstrap-Cut-cartTree', [BootstrapCut_Controller::class, 'BswCTr']);
Route::get('/Bootstrap-Cut-cartFour', [BootstrapCut_Controller::class, 'BswCF']);

// ----------------------------------------------------------------------------------------------

// ?????????
Route::get('/Bootstrap-Cut-chat', [BootstrapCut_Controller::class, 'BswCh']);
// ????????????
Route::get('/Bootstrap-Cut-chat/save', [BootstrapCut_Controller::class, 'BswCh_save']);
// ????????????????????????????????????????????????
Route::get('/Bootstrap-Cut-chat/edit/{id}', [BootstrapCut_Controller::class, 'BswCh_edit']);
//????????????
Route::get('/Bootstrap-Cut-chat/updata/{id}', [BootstrapCut_Controller::class, 'BswCh_updata']);
// ????????????
Route::get('/Bootstrap-Cut-chat/delete/{id}', [BootstrapCut_Controller::class, 'BswCh_delete']);

// ----------------------------------------------------------------------------------------------
//banner??????
Route::prefix('/banner')->group(function () {//banner??????????????????
    //????????????????????????
    Route::get('/', [BannerController::class, 'index']);//???????????????
    Route::get('/create', [BannerController::class, 'create']);//?????????
    Route::post('/store', [BannerController::class, 'store']);//??????
    Route::get('/edit/{id}', [BannerController::class, 'edit']);//?????????
    Route::post('/update/{id}', [BannerController::class, 'update']);//??????
    Route::post('/delete/{id}', [BannerController::class, 'destroy']);//??????
    // Route::get('/delete/{id}', [BannerController::class, 'destroy']);//??????


});

// ----------------------------------------------------------------------------------------------
// ????????????
Route::prefix('/commodity')->group(function () {//Commodity??????????????????
    //????????????????????????
    Route::get('/', [CommodityController::class, 'index']);//???????????????
    Route::get('/create', [CommodityController::class, 'create']);//?????????
    Route::post('/store', [CommodityController::class, 'store']);//??????
    Route::get('/edit/{id}', [CommodityController::class, 'edit']);//?????????
    Route::post('/update/{id}', [CommodityController::class, 'update']);//??????
    Route::post('/delete/{id}', [CommodityController::class, 'destroy']);//??????
    Route::delete('/delete_img/{id}', [CommodityController::class, 'delete_img']);//??????
    
});





// Route::resource('/banner', [BannerController::class, 'banner]);














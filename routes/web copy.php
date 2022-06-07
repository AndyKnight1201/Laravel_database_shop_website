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

// 留言板
Route::get('/Bootstrap-Cut-chat', [BootstrapCut_Controller::class, 'BswCh']);
// 貯存留言
Route::get('/Bootstrap-Cut-chat/save', [BootstrapCut_Controller::class, 'BswCh_save']);
// 導向編輯留言頁面並帶入欲編輯資料
Route::get('/Bootstrap-Cut-chat/edit/{id}', [BootstrapCut_Controller::class, 'BswCh_edit']);
//更換留言
Route::get('/Bootstrap-Cut-chat/updata/{id}', [BootstrapCut_Controller::class, 'BswCh_updata']);
// 刪除留言
Route::get('/Bootstrap-Cut-chat/delete/{id}', [BootstrapCut_Controller::class, 'BswCh_delete']);

// ----------------------------------------------------------------------------------------------
//banner管理
Route::prefix('/banner')->group(function () {//banner管理相關路由
    //一般公司路由寫法
    Route::get('/', [BannerController::class, 'index']);//總表，列表
    Route::get('/create', [BannerController::class, 'create']);//新增頁
    Route::post('/store', [BannerController::class, 'store']);//儲存
    Route::get('/edit/{id}', [BannerController::class, 'edit']);//編輯頁
    Route::post('/update/{id}', [BannerController::class, 'update']);//更新
    Route::post('/delete/{id}', [BannerController::class, 'destroy']);//刪除
    // Route::get('/delete/{id}', [BannerController::class, 'destroy']);//刪除


});

// ----------------------------------------------------------------------------------------------
// 商品管理
Route::prefix('/commodity')->group(function () {//Commodity管理相關路由
    //一般公司路由寫法
    Route::get('/', [CommodityController::class, 'index']);//總表，列表
    Route::get('/create', [CommodityController::class, 'create']);//新增頁
    Route::post('/store', [CommodityController::class, 'store']);//儲存
    Route::get('/edit/{id}', [CommodityController::class, 'edit']);//編輯頁
    Route::post('/update/{id}', [CommodityController::class, 'update']);//更新
    Route::post('/delete/{id}', [CommodityController::class, 'destroy']);//刪除
    Route::delete('/delete_img/{id}', [CommodityController::class, 'delete_img']);//刪除
    
});





// Route::resource('/banner', [BannerController::class, 'banner]);














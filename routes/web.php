<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ZeldaController;
use App\Http\Controllers\microsoftController;
use App\Http\Controllers\BootstrapCut_Controller;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CommodityController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailsController;
use App\Http\Controllers\CartController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','power'])->name('dashboard');

require __DIR__.'/auth.php';


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
Route::get('/Commodity-Inner/{id}', [Controller::class, 'CommodityInner']);
Route::post('/add_to_cart', [Controller::class, 'add_cart']);
Route::post('/cartlist/delete/{id}', [CartController::class, 'cartlist_delete']);

Route::get('/Bootstrap-Cut-cart', [CartController::class, 'BswC']);
Route::middleware(['auth'])->group(function () {
    Route::post('/Bootstrap-Cut-cartTwo', [CartController::class, 'BswCTw']);
    Route::post('/Bootstrap-Cut-cartTree', [CartController::class, 'BswCTr']);
    Route::post('/Bootstrap-Cut-cartFour', [CartController::class, 'BswCF']);
    Route::get('/show_order/{id}', [CartController::class, 'show_order']);
});



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
Route::prefix('/banner')->middleware(['auth'])->group(function () {//banner管理相關路由
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
Route::prefix('/commodity')->middleware(['auth'])->group(function () {//Commodity管理相關路由
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
// ----------------------------------------------------------------------------------------------
//使用者管理
Route::prefix('/account')->middleware(['auth'])->group(function () {
    //一般公司路由寫法
    Route::get('/', [AccountController::class, 'index']);//總表，列表
    Route::get('/create', [AccountController::class, 'create']);//新增頁
    Route::post('/store', [AccountController::class, 'store']);//儲存
    Route::get('/edit/{id}', [AccountController::class, 'edit']);//編輯頁
    Route::post('/update/{id}', [AccountController::class, 'update']);//更新
    Route::post('/delete/{id}', [AccountController::class, 'destroy']);//刪除

});

// ----------------------------------------------------------------------------------------------

Route::prefix('/order')->middleware(['auth'])->group(function () {
    Route::get('/', [OrderController::class, 'index']);//總表，列表
    Route::get('/edit/{id}', [OrderController::class, 'edit']);//訂單檢視頁
    Route::post('/update/{id}', [OrderController::class, 'update']);
});

// Route::get('/order_details', [BootstrapCut_Controller::class, 'details']);


// 檢視訂單列表
Route::get('/order_list', [OrderController::class, 'order_list']);//總表，列表








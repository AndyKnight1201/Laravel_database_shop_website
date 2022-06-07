<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{

    public function index()
    {
        $banner = Banner::orderBy('id','desc')->get();

        $header = '商品主頁';
        $slot = '';

        return view('banner.bannerindex',compact('banner','header','slot'));
    }



    //banner新增組
    public function create()
    {
        $header = '商品新增';
        $slot = '';
        return view('banner.bannerindex_create',compact('header','slot'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // 將圖片資訊建立並+存入public/banner
        $path = Storage::disk('local')->put('public/banner',$request->img_path);
        $path = str_replace('public','storage',$path);//將路經中的public換成storage

        Banner::create([
            // 將$path的路徑從到資料庫中
            'img_path' =>'/'.$path,
            'img_opacity' =>$request->img_opacity,
            'weight' =>$request->weight,
        ]);
        // 回到之前頁面
        return redirect('/banner');
    }



    //banner編輯組
    public function edit($id)
    {
        //根據id找到想編輯的資料，將資料連同編輯用的畫面傳給使用者。
        $edit = Banner::find($id);
        $header = '商品編輯';
        $slot = '';
        return view('banner.bannerindex_edit',compact('edit','header','slot'));
    }


    public function update(Request $request, $id)
    {

        //根據ID找到想修改的資料。
        $banner = Banner::find($id);

        // hasfile('')函式判斷參數(也就是input的name)回傳的值是否為檔案
        // 不是檔案一率為false，也就是說Form勢必要enctype="multipart/form-data"
        // input的type勢必要file
        if ($request->hasfile('img_path')) {
            // Laravel 內建做法
            //使用者上傳的資料 先經過處理(EX:檔案上傳/防呆...)後
            $path = Storage::disk('local')->put('public/banner',$request->img_path);
            $path = str_replace('public','storage',$path);
            //將舊有資料刪除
            $target = str_replace('storage','public',$banner->img_path);
            Storage::disk('local')->delete($target);

            $banner ->img_path ='/'.$path;
        }

        // Laravel 內建做法
        // 使用者上傳的資料 先經過處理(EX:檔案上傳/防呆...)後
        // $path = Storage::disk('local')->put('public/banner',$request->img_path);
        // $path = str_replace('public','storage',$path);
        // //將舊有資料刪除
        // $target = str_replace('storage','public',$banner->img_path);
        // Storage::disk('local')->delete($target);

        // 將新資料更新到資料庫
        // $banner ->img_path ='/'.$path;
        $banner ->img_opacity = $request->img_opacity;
        $banner ->weight = $request->weight;
        $banner ->save();

        //使用下列一般方式撰寫的刪除寫法
        // $target = str_replace('storage','public', Banner::find($id)->img_path);
        // Storage::disk('local')->delete($target);

        // Banner::where('id', $id)->update([
        //     'img_path' =>'/'.$path,
        //     'img_opacity' =>$request->img_opacity,
        //     'weight' =>$request->weight,
        // ])
        return redirect('/banner');
    }




    public function destroy($id)
    {

        // 先把資料刪除再刪資料庫

        $banner = Banner::find($id);

        $target = str_replace('storage','public', $banner->img_path);
        Storage::disk('local')->delete($target);

        $banner->delete();

        return redirect('/banner');
    }
}

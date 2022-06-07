<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commodity;
use App\Models\Product_img;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\FilesController;


class CommodityController extends Controller
{


    public function index()
    {
        $commodity = Commodity::orderBy('id','desc')->get();

        $header = '商品主頁';
        $slot = '';

        return view('commodity.commodity_index',compact('commodity','header','slot'));

    }

    //Commodity新增組
    public function create()
    {
        $header = '商品增加';
        $slot = '';
        return view('commodity.commodity_create',compact('header','slot'));
    }


    public function store(Request $request)
    {
        // dd($request->all());

        // 將input回傳的圖片資料使用FilesController放入建好的路近位置資料夾中。
        // 並且宣告變數，等於這個圖片放置的路徑位址，FilesController會將內容路徑轉成字串表示。
        // 表示$path=路徑字串
        // 例如$path = /upload/commodity/1651.gif
        $path = FilesController::imgUpload($request->img_path,'commodity');

        // 將所有input回傳值存入資料表中
        $product = Commodity::create([
            // 將上方FilesController轉成的字串存入img_path欄位
            'img_path' =>$path,

            'commodity_name' =>$request->commodity_name,
            'commodity_price' =>$request->commodity_price,
            'quantity' =>$request->quantity,
            'introduce' =>$request->introduce,

        ]);

        //利用if判斷如果input有上傳次要圖片才執行，second_img是input的name
        if ($request->hasfile('second_img')) {
            //利用 foreach將接收到含多筆圖片資料的陣列，依序存入路徑中。
            //$index為每筆資料在陣列中的位置座標
            //$element為每筆資料
            foreach($request->second_img as $index => $element){

            $path = FilesController::imgUpload($element,'commodity');

                Product_img::create([
                    //將接收到含多張圖片的陣列依序存入資料表欄位中。
                    'img_path' =>$path,
                    'product_id'=> $product->id,
                ]);
            }
        }

        return redirect('/commodity');
    }


    // Commodity編輯組
    public function edit($id)
    {
        $edit = Commodity::find($id);
        //利用Model的imgs關聯函式，查看另一個資料表，和這個資料ID對應關聯的相同product_id的資料
        // dd($edit->imgs->all());

        $header = '商品編輯';
        $slot = '';
        return view('commodity.commodity_edit',compact('edit','header','slot'));

    }

    // public function edit($id)
    // {
    //     $edit = Commodity::find($id);
    //     $commodity = Commodity::orderBy('id','desc')->get();
    //     //利用Model的imgs關聯函式，查看另一個資料表，和這個資料ID對應關聯的相同product_id的資料
    //     // dd($edit->imgs->all());
    //     return view('commodity.bootstrapWork_pg_store',compact('edit','commodity'));

    // }


    public function update(Request $request, $id)
    {

        $commodity = Commodity::find($id);

        // 如果有上傳圖片
        if ($request->hasfile('img_path')) {
            // 將圖片存放加入資料夾中
            $path = FilesController::imgUpload($request->img_path,'commodity');
            //刪除商品資料表中img_path紀載的路徑所指定的圖片，意思就是在圖片資料夾中刪除被取代的圖片
            //為甚麼能刪除?因為路徑也記載圖片本身的名稱。
            FilesController::deleteUpload($commodity->img_path);

            // Laravel 內建取得圖片並存資料表做法
            // $path = Storage::disk('local')->put('public/commodity',$request->img_path);
            // $path = str_replace('public','storage',$path);
            // 將路徑名稱換回來，並且從原路徑中刪除。
            // $target = str_replace('storage','public',$commodity->img_path);
            // Storage::disk('local')->delete($target);

            // 複寫img_path紀載的路徑，FilesController會整理路徑並轉成字串。
            $commodity->img_path = $path;
        }

        if ($request->hasfile('second_img')) {
            foreach ($request->second_img as $key => $value) {
                $path = FilesController::imgUpload($value,'commodity');

                product_img::create([
                    'img_path' =>$path,

                    // 資料表product_id欄位存入Commodity::find($id)這筆資料的id
                    //實際上長這樣 'product_id'=>Commodity::find($id)->id,只是有先宣告變數$commodity。
                    'product_id'=>$commodity->id,

                ]);

            }
        }
        // 將所有input回傳值存入資料表中第二種寫法，使用轉存的方式。
        $commodity ->commodity_name = $request->commodity_name;
        $commodity ->commodity_price = $request->commodity_price;
        $commodity ->quantity = $request->quantity;
        $commodity ->introduce = $request->introduce;
        $commodity ->save();
        return redirect('/commodity');
    }



    public function destroy($id)
    {
        // 利用$id變數在商品資料表中找到對應的ID資料。
        $commodity = Commodity::find($id);

        // 取得所有要被刪除的商品次要圖片
        $imgs = Product_img::where('product_id',$id)->get();

        // 次要圖片可能有多筆，使用foreach刪除多筆資料
        foreach ($imgs as $key => $value) {
            // 先依據每筆資料的img_path所紀錄之路徑刪除每筆圖片
            FilesController::deleteUpload($value->img_path);
            // 再刪除每筆資料本身
            $value->delete();
        }
        //或者可以直接刪掉取得的多筆資料
        // Product_img::where('product_id',$id)->delete();

        // 刪除商品資料表中的資料img_path所紀錄之路徑圖片
        FilesController::deleteUpload($commodity->img_path);

        // 刪除商品資料表中對應ID的單筆資料
        $commodity->delete();
        return redirect('/commodity');
    }

    public function delete_img($id){

        // 由次要圖片ID找到要刪除的次要圖片資料
        $img = product_img::find($id);
        // 刪除路徑中的次要圖片
        FilesController::deleteUpload($img->img_path);
        // 轉存該次要圖片資料的product_id到變數中等等return 要用到
        $product_id = $img->product_id;
        // 把這筆資料刪掉囉
        $img->delete();
        // 用剛剛轉存有product_id的變數回到之前的編輯頁面
        return redirect('/commodity/edit/'.$product_id );

    }
}

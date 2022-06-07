<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// Model的情況，如果要引用其他Model，不設use的情況預設會抓同一個資料夾的Model

/**
 * @property integer $id
 * @property mixed $created_at
 * @property mixed $updated_at
 * @property string $img_path
 * @property integer $product_id
 */
class Product_img extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_imgs';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['img_path', 'product_id'];


    // 使用函式關聯兩個資料表的欄位，這兩個欄位的值要對得上。
    //函式名稱不可與其他控制器函式重複
    // 每一張商品圖片
    public function Commodity(){

        // //hasOne/hasMany 格式(對照的model::class,'對方的欄位','自己的欄位')
        // return $this->hasOne(Commodity::class,'id','product_id');

        //必定屬於某一個商品
        //belongsTo/belongsToMany 格式(對照的model::class,'自己的欄位','對方的欄位')
        return $this->belongsTo(Commodity::class,'product_id','id');

    }
}

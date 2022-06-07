<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property mixed $created_at
 * @property mixed $updated_at
 * @property string $img_path
 * @property string $commodity_name
 * @property string $commodity_price
 * @property integer $quantity
 * @property string $introduce
 */
class Commodity extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'commoditys';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['img_path', 'commodity_name', 'commodity_price', 'quantity', 'introduce'];

    //每一筆商品資料
    public function imgs(){
        // 可以有很多張圖片
      return $this->hasMany(product_img::class,'product_id','id');

    }
    public function shoppingcart(){
        // 可以存在於多個購物明細中
      return $this->hasMany(ShoppingCart::class,'product_id','id');

    }

}

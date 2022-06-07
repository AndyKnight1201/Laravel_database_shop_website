<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property mixed $created_at
 * @property mixed $updated_at
 * @property integer $commodity_id
 * @property integer $user_id
 * @property integer $qty
 */
class ShoppingCart extends Model
{

    protected $table = 'shopping_carts';
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'commodity_id', 'user_id', 'qty'];

        //下方為對商品的關聯
        // 每一筆使用者想採買的商品
        public function commodity(){
            // 一定是店裡賣的某件商品
            return $this->hasOne(Commodity::class,'id','commodity_id');
        }


        // public function quantity(){
        //     return $this->hasMany(Commodity::class,'quantity','qty');
        // }
    //下方為對使用者的關聯
        public function userlist(){
            // 一定屬於某個使用者
            return $this->belongsTo(User::class,'user_id','id');
        }

}

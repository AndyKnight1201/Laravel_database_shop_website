<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $commodity_price
 * @property integer $shipping_fee
 * @property integer $price_total
 * @property integer $qty
 * @property string $user_name
 * @property string $phone
 * @property string $email
 * @property string $address
 * @property integer $pay_way
 * @property integer $shipping_way
 * @property string $store_address
 * @property integer $status
 * @property string $ps
 * @property mixed $created_at
 * @property mixed $updated_at
 */
class Order extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['commodity_price', 'shipping_fee', 'price_total', 'qty', 'user_name', 'phone', 'email', 'address', 'pay_way', 'shipping_way', 'store_address', 'status', 'ps', 'created_at', 'updated_at','user_id'];


    public function detail(){
        return $this->hasMany(Order_detail::class,'order_id','id');
    }

    public function user_details(){
        return $this->belongs(Order_detail::class,'user_id','id');
    }
}

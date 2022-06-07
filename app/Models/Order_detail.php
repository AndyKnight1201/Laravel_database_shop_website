<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $commodity_id
 * @property integer $qty
 * @property integer $price
 * @property integer $order_id
 * @property mixed $created_at
 * @property mixed $updated_at
 */
class Order_detail extends Model
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
    protected $fillable = ['commodity_id', 'qty', 'price', 'order_id', 'created_at', 'updated_at'];

    public function order(){
        return $this->belongsTo(Order::class,'order_id','id');
    }

    public function product(){
        return $this->hasOne(Commodity::class,'id','commodity_id');
    }

}

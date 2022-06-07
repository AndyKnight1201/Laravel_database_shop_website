<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('commodity_price')->nullable()->comment('商品價格');
            $table->integer('shipping_fee')->nullable()->comment('運費');
            $table->integer('price_total')->nullable()->comment('價格總計');
            $table->integer('qty')->nullable()->comment('品項數量');
            $table->string('user_name')->nullable()->comment('姓名');
            $table->string('phone')->nullable()->comment('電話');
            $table->string('email')->nullable()->comment('email');
            $table->string('address')->nullable()->comment('地址');
            $table->integer('pay_way')->nullable()->comment('付款方式');//信用卡 網路ATM
            $table->integer('shipping_way')->nullable()->comment('運送方式');
            $table->string('store_address')->nullable()->comment('取貨超商');
            $table->integer('status')->nullable()->comment('訂單狀態');
            $table->string('ps')->nullable()->comment('訂單備註');
            
            $table->timestamps();







        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};

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
        Schema::create('commoditys', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('img_path')->nullable()->comment('圖片路徑');
            $table->string('commodity_name')->nullable()->comment('商品名稱');
            $table->string('commodity_price')->nullable()->comment('商品價格');
            $table->integer('quantity')->nullable()->comment('商品數量');
            $table->string('introduce')->nullable()->comment('介紹');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commoditys');
    }
};

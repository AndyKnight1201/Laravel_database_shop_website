<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chat extends Model
{
    use HasFactory;

    //使用的資料表單名稱
    protected $table = 'chats';

    // 使用的資料表主key
    // 主key通常會是索引的角色(資料表中用金鑰匙圖示表示)
    // 主key的值不可重複，有自動累加特性。
    protected $primarykey = 'id';

    // 白名單(開放名單):只有以下設定的欄位可以被填寫，其他欄位不行。
    protected $fillable = ['title','name','content','email'];

    // 黑名單(防守名單):除了以下設定的三個欄位之外，其他欄位都可以被填寫
    // protected $guard = ['created_at','updated','id'];
}

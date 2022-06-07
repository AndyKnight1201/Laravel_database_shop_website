<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
// 呼叫加密
use Illuminate\Support\Facades\Hash;
// 呼叫Rules密碼判斷規則
use Illuminate\Validation\Rules;
//呼叫內建驗證器
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
{

    public function index()
    {
        $account = User::orderBy('id','desc')->get();

        $header = '帳號管理';
        $slot = '';

        return view('account.account_index',compact('account','header','slot'));

    }

    // 新增組
    public function create()
    {
        $header = '帳號新增';
        $slot = '';
        return view('account.account_create',compact('header','slot'));
    }


    public function store(Request $request)
    {

        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
        // ]);
            // 改寫成呼叫一個驗證器去幫我們驗證帳號
        $validate = validator::make($request->all(),[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if ($validate->fails()) {
            return redirect('/account/create')->with('problem','輸入資訊錯誤請重新檢查');
        }

        $User = User::create([
            'name' =>$request->name,
            'email' =>$request->email,
            //Hash編碼加密
            'password' =>Hash::make($request->password),
            'power'=> 1,
        ]);

        return redirect('/account')->with('success','新增成功');
    }

    // 編輯組
    public function edit($id)
    {
        $edit = User::find($id);
        //利用Model的imgs關聯函式，查看另一個資料表，和這個資料ID對應關聯的相同product_id的資料

        $header = '帳號編輯';
        $slot = '';
        return view('account.account_edit',compact('edit','header','slot'));
    }

    public function update(Request $request, $id)
    {
        // 將所有input回傳值存入資料表中第二種寫法，使用轉存的方式。
        $User = User::find($id);
        $User ->name = $request->name;
        $User ->power = $request->power;
        // needsRehash檢查是否做過Hash加密運算，如果沒有才執行Hash::make加密動作。
        // 也可以說如果是新的密碼(沒做過加密運算)，才執行加密動作。
        // Hash::needsRehash($request->password)，檢測發現有改密碼是ture，沒改密碼是false。
        if (Hash::needsRehash($request->password)) {
            $User ->password = Hash::make($request->password);
        }
        $User ->save();
        return redirect('/account')->with('success','編輯成功');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
              // 利用$id變數在資料表中找到對應的ID資料。
              $account = User::find($id);
              // 刪除資料表中對應ID的單筆資料
              $account->delete();
              return redirect('/account')->with('success','刪除成功');
    }
}

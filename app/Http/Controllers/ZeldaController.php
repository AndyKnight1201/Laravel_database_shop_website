<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZeldaController extends Controller
{
    public function Ze(){
        return view('RWD_Zedla.RWD_Zedla_Flex_Front_Page');
    }
    public function ZeCp(){
        return view('RWD_Zedla.RWD_ZedlaCP');
    }
    public function ZeGa(){
        return view('RWD_Zedla.RWD_ZedlaGanon');
    }
    public function ZeHy(){
        return view('RWD_Zedla.RWD_ZedlaHyrule');
    }
}

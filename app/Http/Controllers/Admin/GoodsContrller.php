<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//购物车详情控制器
class GoodsContrller extends Controller
{
    //
    public function index(){
        return view("/Admin/Goods/Index");
    }


}
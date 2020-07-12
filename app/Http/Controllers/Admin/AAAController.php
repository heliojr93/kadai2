<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AAAController extends Controller
{
    //以下を追加
    public function bbb(){
        return view(admin.news.create);
    }
}

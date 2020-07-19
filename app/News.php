<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //以下を追加
    public static $rules=array(
        'title'=>'required',
        'body'=>'required',
        );

}

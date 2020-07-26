<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //以下を追加
    public static $rules=array(
        'name'=>'required',
        'gender'=>'required',
        'hobby'=>'required',
        );
}

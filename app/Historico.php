<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historico extends Model
{
    //以下を追加
     protected $guarded=array('id');
     public static $rules=array(
         'profiles_id'=>'required',
         'edited_at'=>'required'
         );
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    protected $guarded = array('id');
    //以下を追加
    public static $rules=array(
        'name'=>'required',
        'gender'=>'required',
        'hobby'=>'required'
         );
    public function historicos(){
        return $this->hasMany('App\Historico');
    }
        
    
}

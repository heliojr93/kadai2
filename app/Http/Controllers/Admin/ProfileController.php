<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;

class ProfileController extends Controller
{
    //以下を追加
    public function add(){
        return view('admin.profile.create');

    }
    public function create(Request $request){
        //以下を追加
        //validationを行う
        $this->validate($request,Profile::$rules);
        $profile=new Profile;
        $form=$request->all();
        //データを保存する
        $profile->fill($form);
        $profile->save(); 
        
        return redirect('admin/profile/create');
    }
    public function edit(){
        return view('admin.profile.edit');
    }
    public function update(){
        return redirect('admin/profile/edit');
    }
}

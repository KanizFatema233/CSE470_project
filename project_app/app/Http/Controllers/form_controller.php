<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form_model;

class form_controller extends Controller
{
    public function get_data(Request $req){
    $req->input();
    $form = new form_model;
    $form->username = $req->username;
    $form->password = $req->password;
    $form->save();
    return view('database_result',['transaction'=>$req]);
  }
}

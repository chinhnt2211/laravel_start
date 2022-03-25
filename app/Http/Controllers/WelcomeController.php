<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function form()
    {
       return view('form');
    }
    public function post(Request $rq)
    {
       $name = $rq->input('name');
       $email = $rq->input('email');
       return view('show',['name'=>$name,'email'=>$email]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function about(){
        return view("about");
    }
    function contact(){
        return view("contact");
    }


    function store(Request $request){
        $name= $request->name;
        return redirect()->route('thanks',['name'=>$name]);
    }
    function thanks($name){
        return view('thankyou')->with(compact('name'));
    }
}

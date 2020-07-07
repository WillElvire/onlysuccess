<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inscritsController extends Controller
{
    public function show(){

    	$utilisateurs = \App\incription::all();

    	return view('admin/inscrits',compact('utilisateurs'));
    }
}

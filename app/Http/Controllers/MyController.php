<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    function index(){

    	$title = "My first program";
    	return view("hello")->with("title", $title);
    } 


}

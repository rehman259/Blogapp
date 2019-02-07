<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * undocumented function
     *
     * @return void
     * @author 
     **/
    public function about()
    {
    	return view('page.about');
    }

    /**
     * undocumented function
     *
     * @return void
     * @author 
     **/
    public function services()
    {
    	return view('page.services');
    }
}

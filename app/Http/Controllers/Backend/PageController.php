<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display the Dashboard Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        //Return the View of Dashboard Page
        return view ('backend.dashboard');
    }


}
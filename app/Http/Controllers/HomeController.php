<?php

namespace Librory\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        return view('pages.dashboards.' . auth()->user()->role->slug);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    // HOME PAGE
    public function index() {
        return view('static-page.index');
    }
    // FORM PAGE
    public function form() {
        return view('static-page.form');
    }    
}

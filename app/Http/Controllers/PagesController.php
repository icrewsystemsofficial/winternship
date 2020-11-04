<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
      return view('index');
    }

    public function PageTwo() {
      return view('index2');
    }

    public function PageThree() {
      return view('index3');
    }


}

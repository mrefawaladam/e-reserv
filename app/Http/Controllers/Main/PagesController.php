<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    // scanner funciton
    public function scan(){
        return view('pages.main.scan');
    }
}

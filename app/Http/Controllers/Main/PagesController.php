<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;


class PagesController extends Controller
{
    // scanner funciton
    public function scan(){
        return view('pages.main.scan');
    }

    // menu
    public function menu(){
        $menus = Menu::with('main_photo')->get();
        // dd($menus);
        return view('pages.main.menu', compact('menus'));
    }
}

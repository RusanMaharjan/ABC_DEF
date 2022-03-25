<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Menu;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        $menus = Menu::all();
        $items = Item::all();
        return view('frontend.menu', compact('menus', 'items'));
    }
}

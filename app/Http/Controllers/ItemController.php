<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Menu;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index() {
        $menus = Menu::all();
        return view('admin.Item.addItem', compact('menus'));
    }

    public function create(Request $request) {
        
    }

    public function edit() {
        return view('admin.Item.editItem');
    }

    public function all() {
        return view('admin.Item.allItem');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index() {
        return view('admin.Menu.addMenu');
    }

    public function create(Request $request) {
        $menu = new Menu();
        $menu->menuName = $request->menuName;
        $menu->save();
        return back()->with('message','Menu created successfully.');
    }

    public function edit($menuId) {
        $menu = Menu::find($menuId);
        return view('admin.Menu.editMenu',compact('menu'));
    }

    public function update(Request $request) {
        $menu = Menu::find($request->menuId);
        $menu->menuName = $request->menuName;
        $menu->save();
        return back()->with('message', 'Menu updated successfully.');
    }

    public function all() {
        $menus = Menu::all();
        return view('admin.Menu.allMenu', compact('menus'));
    }
}

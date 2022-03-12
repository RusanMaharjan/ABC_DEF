<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Menu;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    //CRUD
    
    //show add page
    public function index() {
        $menus = Menu::all();
        return view('admin.Item.addItem', compact('menus'));
    }

    //add data in item
    public function create(Request $request) {
        $item = new Item();
        $item->itemName = $request->itemName;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->menuId = $request->menuId;
        $img = $request->file;
        $imgName=time().'.'.$img->getClientoriginalExtension();
        $request->file->move('image',$imgName);
        $item->image=$imgName;
        $item->save();
        return back()->with('message', 'Item added successfully');
    }

    //used to show data
    public function all() {
        $items = Item::all();
        return view('admin.Item.allItem', compact('items'));
    }

    //get id and show edit page
    public function edit() {
        return view('admin.Item.editItem');
    }

    //update data of item
    public function update() {

    }
}

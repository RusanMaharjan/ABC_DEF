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
    public function edit($itemId) {
        $menus = Menu::all();
        $item = Item::find($itemId);
        return view('admin.Item.editItem', compact('item', 'menus'));
    }

    //update data of item
    public function update(Request $request) {
        $items = Item::find($request->itemId);
        $items->itemName = $request->itemName;
        $items->description = $request->description;
        $items->price = $request->price;
        $items->menuId = $request->menuId;
        $img = $request->file;
        if($img) {
            $imgName=time().'.'.$img->getClientoriginalExtension();
            $request->file->move('image',$imgName);
            $items->image=$imgName;
        }
        $items->save();
        return back()->with('message', 'Item updated successfully.');
    }

    public function delete($itemId) {
        Item::where('itemId', $itemId)->delete();
        return back()->with('message', 'Item deleted successfully.');
    }

}

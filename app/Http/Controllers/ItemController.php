<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index() {
        return view('admin.Item.addItem');
    }

    public function edit() {
        return view('admin.Item.editItem');
    }

    public function all() {
        return view('admin.Item.allItem');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $table = 'items';
    protected $primary_key = 'itemId';

    public function menu() {
        return $this->belongsTo(Menu::class, 'menuId');
    }
}

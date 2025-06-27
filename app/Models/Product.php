<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['nama', 'stok', 'harga'];

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}


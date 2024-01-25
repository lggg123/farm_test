<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price'];

    public function responsibility(){
        return $this->belongsTo(Product::class);
    }

    public function tools(){
        return $this->hasMany(Tool::class);
    }
}

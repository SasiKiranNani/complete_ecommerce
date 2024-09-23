<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

   
    public function brands()
    {
        return $this->hasMany(Brand::class, 'category_id');
    }
     public function products()
    {
        return $this->hasMany(Product::class);
    }
}

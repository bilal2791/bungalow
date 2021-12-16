<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    use HasFactory;



    protected $guarded= [];

   //product
    public function category_product(){

        return $this->belongsTo(Category::class, 'category_id');
    }

    public function subcategory_product(){

        return $this->belongsTo(SubCategory_id::class, 'subcategory_id');
    }

}

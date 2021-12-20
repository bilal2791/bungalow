<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;


class SubCategory extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function category()
    {
       return $this->belongsTo(Category::class, 'SubCategory_id');
    }

       //product

    public function subcate_product()
    {

        return $this->hasMany(Product::class);

      }


}

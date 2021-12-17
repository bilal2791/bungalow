<?php

namespace App\Models;
use App\Models\MainCategory;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    use HasFactory;

    protected $table="categories";
    // protected $guarded = [];
    protected $fillable =['name','MainCategory_id'];

      public function main_categories(){

      return $this->belongsTo(MainCategory::class ,'MainCategory_id');

    }

    public function subcategory()
    {
       return $this->hasMany(SubCategory::class, 'SubCategory_id');

    }

    //product
    public function cat_product(){

      return $this->hasMany(Product::class ,'category_id');

    }



}

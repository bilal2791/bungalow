<?php

namespace App\Models;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function categories()
    {

      return $this->hasMany(Category::class,'id', 'MainCategory_id');
    }
}

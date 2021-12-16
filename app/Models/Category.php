<?php

namespace App\Models;
use App\Models\MainCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

   
    public function main_categories(){

        return $this->belongsTo(MainCategory::class);
    }
}

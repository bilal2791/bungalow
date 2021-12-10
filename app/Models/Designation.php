<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    use HasFactory;

   protected $tale="designations";

    protected $fillable=['title'];

    public function customers(){

        return $this->belongsTo(Customer::class);
    }

}

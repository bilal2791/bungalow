<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table="customers";

    protected $fillable= ['fullname','designation_id','email','phone','country','address'];

    public function designations()
    {
      return $this->hasOne(Designation::class,'id', 'designation_id');
    }


}

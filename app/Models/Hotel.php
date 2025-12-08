<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
  protected $fillable=[
  'name',
  'description',
  'city',
  'adress',
   'category_id' 
    ];
    public function Category(){
        return $this->belongsto(category::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [ 'name' ];

    public function user(){
        return $this->hasMany(User::class,'role_id','id');
    }

    public function product(){
        return $this->hasMany(Product::class,'role_id','id');
    }

    public function gategory(){
        return $this->hasMany(Category::class,'role_id','id');
    }
}

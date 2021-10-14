<?php

namespace App\Models;

use App\Models\Category;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory,Searchable;

    protected $fillable = [
        'name',
        'description',
        'price',
        'sale',
        'status',
        'image',
        'category_id',
        'role_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function role(){
        return $this->belongsTo(Role::class,'role_id','id');
    }

    /**
     * Get the name of the index associated with the model.
     *
     * @return string
     */
   

}

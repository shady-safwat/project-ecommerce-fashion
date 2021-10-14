<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'name',
        'date_of_birth',
        'gender',
        'phone',
        'email',
        'country',
        'address',
        'city',
        'state',
        'zip_code',
        'role_id'
    ];

    public function role(){
        return $this->belongsTo(Role::class,'role_id','id');
    }
}

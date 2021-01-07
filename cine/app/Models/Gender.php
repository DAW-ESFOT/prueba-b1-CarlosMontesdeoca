<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function movies(){
        return $this->hasMany('App\Models\Movie');
    }

    public function users(){
        return $this->belongsToMany('App\Models\User');
    }
}

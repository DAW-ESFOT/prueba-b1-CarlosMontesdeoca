<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Movie extends Model
{
    use HasFactory;

    public static function boot(){
        parent::boot();
        static::creating(function ($movie) {
            $movie->gender_id = Auth::id();
        });
    }

    protected $fillable = [
        'name',
        'code',
        'year'
    ];

    public function gender(){
        return $this->belongsTo('App\Models\Gender');
    }

}
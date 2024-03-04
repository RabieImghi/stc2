<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'date', 'adresse', 'placeNumber', 'acceptType', 'category_id', 'image', 'user_id', 'isPublish'];
    public function user(){
        return $this->belongsTo(User::class);
    }
}

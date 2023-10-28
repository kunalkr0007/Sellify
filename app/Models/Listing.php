<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = ['cat_id','user_id','brand', 'title', 'description', 'price', 'location', 'file'];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

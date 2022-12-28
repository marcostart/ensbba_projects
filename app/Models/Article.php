<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'image',
        'publisher_id',
    ];

    public function publisher(){
        return $this->belongsTo(User::class, 'publisherr_id');
    }
}

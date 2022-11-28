<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $fillable = ['publisher_id', 'title', 'author', 'year', 'synopsis', 'image'];

    public function publisher()
    {
        return $this->belongsTo('App\Models\Publishers', 'publisher_id');
    }
}

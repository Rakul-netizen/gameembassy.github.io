<?php

namespace App\Models\CardsRow1;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Row1C6 extends Model
{
    use HasFactory;
    protected $table = 'row1c6';
    protected $fillable = [
        'title6',
        'subtitle6',
        'youtubelinks6',
        'description6',
        'content6',
        'image6',
        'video6',
    ];
}

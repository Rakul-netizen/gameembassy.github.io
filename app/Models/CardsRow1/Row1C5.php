<?php

namespace App\Models\CardsRow1;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Row1C5 extends Model
{
    use HasFactory;
    protected $table = 'row1c5';
    protected $fillable = [
        'title5',
        'subtitle5',
        'youtubelinks5',
        'description5',
        'content5',
        'image5',
        'video5',
    ];
}

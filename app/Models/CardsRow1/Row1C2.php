<?php

namespace App\Models\CardsRow1;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Row1C2 extends Model
{
    use HasFactory;
    protected $table = 'row1c2';
    protected $fillable = [
        'title2',
        'subtitle2',
        'youtubelinks2',
        'description2',
        'content2',
        'image2',
        'video2',
    ];
}

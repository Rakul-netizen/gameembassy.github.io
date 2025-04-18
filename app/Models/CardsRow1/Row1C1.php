<?php

namespace App\Models\CardsRow1;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Row1C1 extends Model
{
    use HasFactory;
    protected $table = 'row1c1';
    protected $fillable = [
        'title1',
        'subtitle1',
        'youtubelinks1',
        'description1',
        'content1',
        'image1',
        'video1',

    ];
}

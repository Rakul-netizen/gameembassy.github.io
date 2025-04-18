<?php

namespace App\Models\CardsRow1;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Row1C3 extends Model
{
    use HasFactory;
    protected $table = 'row1c3';
    protected $fillable = [
        'title3',
        'subtitle3',
        'youtubelinks3',
        'description3',
        'content3',
        'image3',
        'video3',
    ];
}

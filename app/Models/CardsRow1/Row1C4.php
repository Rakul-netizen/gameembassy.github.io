<?php

namespace App\Models\CardsRow1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Row1C4 extends Model
{
    use HasFactory;
    protected $table = 'row1c4';
    protected $fillable = [
        'title4',
        'subtitle4',
        'youtubelinks4',
        'description4',
        'content4',
        'image4',
        'video4',
    ];
}

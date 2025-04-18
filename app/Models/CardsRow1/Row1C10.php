<?php

namespace App\Models\CardsRow1;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Row1C10 extends Model
{
    use HasFactory;
    protected $table = 'row1c10';
    protected $fillable = [
        'title10',
        'subtitle10',
        'youtubelinks10',
        'description10',
        'content10',
        'image10',
        'video10',
    ];
}

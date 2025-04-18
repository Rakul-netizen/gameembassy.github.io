<?php

namespace App\Models\CardsRow1;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Row1C20 extends Model
{
    use HasFactory;
    protected $table = 'row1c20';
    protected $fillable = [
        'title20',
        'subtitle20',
        'youtubelinks20',
        'description20',
        'content20',
        'image20',
        'video20',
    ];
}

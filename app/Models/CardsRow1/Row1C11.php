<?php

namespace App\Models\CardsRow1;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Row1C11 extends Model
{
    use HasFactory;
    protected $table = 'row1c11';
    protected $fillable = [
        'title11',
        'subtitle11',
        'youtubelinks11',
        'description11',
        'content11',
        'image11',
        'video11',
    ];
}

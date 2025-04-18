<?php

namespace App\Models\CardsRow1;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Row1C7 extends Model
{
    use HasFactory;
    protected $table = 'row1c7';
    protected $fillable = [
        'title7',
        'subtitle7',
        'youtubelinks7',
        'description7',
        'content7',
        'image7',
        'video7',
    ];
}

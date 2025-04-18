<?php

namespace App\Models\CardsRow1;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Row1C13 extends Model
{
    use HasFactory;
    protected $table = 'row1c13';
    protected $fillable = [
        'title13',
        'subtitle13',
        'youtubelinks13',
        'description13',
        'content13',
        'image13',
        'video13',
    ];
}

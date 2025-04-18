<?php

namespace App\Models\CardsRow1;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Row1C12 extends Model
{
    use HasFactory;
    protected $table = 'row1c12';
    protected $fillable = [
        'title12',
        'subtitle12',
        'youtubelinks12',
        'description12',
        'content12',
        'image12',
        'video12',
    ];
}

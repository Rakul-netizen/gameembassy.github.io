<?php

namespace App\Models\CardsRow1;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Row1C16 extends Model
{
    use HasFactory;
    protected $table = 'row1c16';
    protected $fillable = [
        'title16',
        'subtitle16',
        'youtubelinks16',
        'description16',
        'content16',
        'image16',
        'video16',
    ];
}

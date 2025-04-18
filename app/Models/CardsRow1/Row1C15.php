<?php

namespace App\Models\CardsRow1;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Row1C15 extends Model
{
    use HasFactory;
    protected $table = 'row1c15';
    protected $fillable = [
        'title15',
        'subtitle15',
        'youtubelinks15',
        'description15',
        'content15',
        'image15',
        'video15',
    ];
}

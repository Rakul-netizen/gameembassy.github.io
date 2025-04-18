<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreateBlog extends Model
{
    use HasFactory;
    protected $table = 'create_blogs';
    protected $fillable = ['usertitle', 'userdescription', 'usercontent', 'userimage'];
}

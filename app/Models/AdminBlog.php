<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AdminBlog extends Model
{
    use HasFactory;
    protected $table = 'adminblogs'; // Just to be explicit
    protected $fillable = ['admintitle', 'admindescription', 'admincontent', 'adminimage'];

}

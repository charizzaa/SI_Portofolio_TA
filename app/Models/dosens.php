<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dosens extends Model
{
    use HasFactory;
    protected $fillable = ['id_user','name', 'image_profile',
    'contact', 'major'];
}
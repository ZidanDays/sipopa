<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perkara extends Model
{
    // use HasFactory;

    protected $fillable = ['nama_perkara', 'slug', 'deskripsi', 'syarat', 'image'];
}
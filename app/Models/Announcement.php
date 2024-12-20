<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;
    // Menambahkan title dan content ke dalam array fillable
    protected $fillable = [
        'title',
        'content',
    ];
}

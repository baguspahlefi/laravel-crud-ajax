<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artis extends Model
{
    use HasFactory;

    protected $table = 'artis';
    protected $PrimaryKey = 'kd_artis';
    protected $fillable = [
        'nm_film',
        'jk',
        'bayaran',
        'award',
        'negara'

    ];
}

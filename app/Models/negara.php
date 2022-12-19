<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class negara extends Model
{
    use HasFactory;

    protected $table = 'negara';
    protected $PrimaryKey = 'kd_negara';

    protected $fillable = [
        'nm_negara',
    ];
}

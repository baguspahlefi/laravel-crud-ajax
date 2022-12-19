<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produser extends Model
{
    use HasFactory;
    
    protected $table = 'produser';
    protected $PrimaryKey = 'kd_produser';
    protected $fillable = [
        'nm_produser',
        'international'
    ];
}

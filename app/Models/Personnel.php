<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Personnel extends Model
{

    use SoftDeletes;

    protected $table = 'personnel';
    protected $fillable = [
        'name','address','phone'
    ];
}

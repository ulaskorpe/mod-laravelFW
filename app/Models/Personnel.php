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

        public function city(){

            return $this->belongsTo(City::class,'city_id','id');
           // return $this->hasOne(City::class,'city_id','id');
        }

        public function phone_numbers(){
            return $this->hasMany(PhoneNumber::class,'personnel_id','id');
        }

}

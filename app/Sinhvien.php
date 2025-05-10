<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sinhvien extends Model
{
    protected $table = 'sinhviens';

    public function diems()
    {
<<<<<<< HEAD
        return $this->hasMany('App\Diem', 'sinhvien_id', 'id');
=======
        return $this->hasMany(\App\Diem::class,'sinhvien_id','id');
>>>>>>> develop
    }

    public function lops()
    {
<<<<<<< HEAD
        return $this->belongsTo('App\Lop', 'lop_id', 'id');
=======
        return $this->belongsTo(\App\Lop::class,'lop_id','id');
>>>>>>> develop
    }
}

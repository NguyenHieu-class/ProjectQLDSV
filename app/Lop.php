<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lop extends Model
{
    protected $table = 'lops';

    public function khoas()
    {
<<<<<<< HEAD
        return $this->belongsTo('App\Khoa', 'khoa_id', 'id');
=======
        return $this->belongsTo(\App\Khoa::class,'khoa_id','id');
>>>>>>> develop
    }

    public function sinhviens()
    {
<<<<<<< HEAD
        return $this->hasMany('App\Sinhvien', 'lop_id', 'id');
=======
        return $this->hasMany(\App\Sinhvien::class,'lop_id','id');
>>>>>>> develop
    }

    public function monhocs()
    {
<<<<<<< HEAD
        return $this->belongsToMany('App\Monhoc', 'monhoc_lop', 'lop_id', 'monhoc_id');
=======
        return $this->belongsToMany(\App\Monhoc::class,'monhoc_lop','lop_id','monhoc_id');
>>>>>>> develop
    }
}

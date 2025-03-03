<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diem extends Model
{
    protected $table = 'diems';

    public function sinhviens()
    {
<<<<<<< HEAD
        return $this->belongsTo('App\Sinhvien', 'sinhvien_id', 'id');
=======
        return $this->belongsTo(\App\Sinhvien::class,'sinhvien_id','id');
>>>>>>> develop
    }

    public function monhocs()
    {
<<<<<<< HEAD
        return $this->belongsTo('App\Monhoc', 'monhoc_id', 'id');
=======
        return $this->belongsTo(\App\Monhoc::class,'monhoc_id','id');
>>>>>>> develop
    }
}

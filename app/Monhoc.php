<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monhoc extends Model
{
    protected $table = 'monhocs';

    public function lops()
    {
<<<<<<< HEAD
        return $this->belongsToMany('App\Lop', 'monhoc_lop', 'monhoc_id', 'lop_id');
=======
        return $this->belongsToMany(\App\Lop::class,'monhoc_lop','monhoc_id','lop_id');
>>>>>>> develop
    }

    public function giangviens()
    {
<<<<<<< HEAD
        return $this->belongsTo('App\Giangvien', 'giangvien_id', 'id');
=======
        return $this->belongsTo(\App\Giangvien::class,'giangvien_id','id');
>>>>>>> develop
    }

    public function diems()
    {
<<<<<<< HEAD
        return $this->hasMany('App\Diem', 'monhoc_id', 'id');
=======
        return $this->hasMany(\App\Diem::class,'monhoc_id','id');
>>>>>>> develop
    }
}

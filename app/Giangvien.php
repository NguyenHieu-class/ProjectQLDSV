<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Giangvien extends Model
{
    protected $table = 'giangviens';

    public function monhocs()
    {
<<<<<<< HEAD
        return $this->hasMany('App\Monhoc', 'giangvien_id', 'id');
=======
        return $this->hasMany(\App\Monhoc::class,'giangvien_id','id');
>>>>>>> develop
    }
}

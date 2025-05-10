<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Giangvien;
use App\Lop;
use App\Monhoc;
use App\Sinhvien;
=======
use App\Models\Giangvien;
use App\Models\Lop;
use App\Models\Monhoc;
use App\Models\Sinhvien;
>>>>>>> afee29fe70c6a1b5461203cdfb5d9daf4586f5ed

class PagesController extends Controller
{
    public function __construct()
    {
        $sinhviens = Sinhvien::count();
        $monhocs = Monhoc::count();
        $lops = Lop::count();
        $giangviens = Giangvien::count();
        view()->share('sinhviens', $sinhviens);
        view()->share('monhocs', $monhocs);
        view()->share('lops', $lops);
        view()->share('giangviens', $giangviens);
    }

    public function index()
    {
        return view('index');
    }
}

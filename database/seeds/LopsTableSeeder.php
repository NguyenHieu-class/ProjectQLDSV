<?php

use Illuminate\Database\Seeder;

class LopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        \App\Lop::insert([
=======
        \App\Models\Lop::insert([
>>>>>>> afee29fe70c6a1b5461203cdfb5d9daf4586f5ed
            ['malop' => 'CN3A', 'tenlopvt' => 'ĐHCN3A', 'tenlop' => 'Đại học công nghệ 3A', 'khoa_id' => '1'],
            ['malop' => 'CN3B', 'tenlopvt' => 'ĐHCN3B', 'tenlop' => 'Đại học công nghệ 3B', 'khoa_id' => '1'],
            ['malop' => 'CN3C', 'tenlopvt' => 'ĐHCN3C', 'tenlop' => 'Đại học công nghệ 3C', 'khoa_id' => '1'],
            ['malop' => 'VT3A', 'tenlopvt' => 'ĐHVT3A', 'tenlop' => 'Đại học viễn thông 3A', 'khoa_id' => '2'],

        ]);
    }
}

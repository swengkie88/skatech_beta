<?php

use Illuminate\Database\Seeder;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pkl_siswa')->insert([
            'id' => '1',
            'username' => '29922',
            'password' => bcrypt('akun2000'),
            'nama' => 'Angki Pranamukti',
          
            'kelas' => 'XI TKJ I',
            'alamat' => 'null',
            'phone' => '083867843497',
            'image' => 'no_image.jpg',
            'akses' => 'siswa',
        ]);
    }
}

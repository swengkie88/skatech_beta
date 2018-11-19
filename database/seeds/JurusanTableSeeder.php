<?php

use Illuminate\Database\Seeder;

class JurusanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pkl_jurusan')->insert([
            'id' => '1',
            'jurusan' => 'Konstruksi Gedung, Sanitasi dan Perawatan',
            'deskripsi' => 'Teknik Bangunan',
            'image' => 'no_image.jpg',
        ]);
        DB::table('pkl_jurusan')->insert([
            'id' => '2',
            'jurusan' => 'Desain Permodelan dan Informasi Bangunan',
            'deskripsi' => 'Teknik Bangunan',
            'image' => 'no_image.jpg',
        ]);
        DB::table('pkl_jurusan')->insert([
            'id' => '3',
            'jurusan' => 'Teknik Instalasi Tenaga Listrik',
            'deskripsi' => 'Listrik',
            'image' => 'no_image.jpg',
        ]);
        DB::table('pkl_jurusan')->insert([
            'id' => '4',
            'jurusan' => 'Teknik Permesinan',
            'deskripsi' => 'Mesin',
            'image' => 'no_image.jpg',
        ]);
        DB::table('pkl_jurusan')->insert([
            'id' => '5',
            'jurusan' => 'Teknik Kendaraan Ringan Otomotif',
            'deskripsi' => 'Otomotif',
            'image' => 'no_image.jpg',
        ]);
        DB::table('pkl_jurusan')->insert([
            'id' => '6',
            'jurusan' => 'Teknik Geomatika',
            'deskripsi' => 'Teknik Bangunan',
            'image' => 'no_image.jpg',
        ]);
        DB::table('pkl_jurusan')->insert([
            'id' => '7',
            'jurusan' => 'Teknik Audio Video',
            'deskripsi' => 'Teknik Elektronika',
            'image' => 'no_image.jpg',
        ]);
        DB::table('pkl_jurusan')->insert([
            'id' => '8',
            'jurusan' => 'Teknik Komputer dan Jaringan',
            'deskripsi' => 'Teknologi Komputer dan Informatika',
            'image' => 'no_image.jpg',
        ]);
        DB::table('pkl_jurusan')->insert([
            'id' => '9',
            'jurusan' => 'Multimedia',
            'deskripsi' => 'Teknologi Komputer dan Informatika',
            'image' => 'no_image.jpg',
        ]);
    }
}

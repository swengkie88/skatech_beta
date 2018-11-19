<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            'id' => '1',
            'username' => 'admin',
            'password' => bcrypt('k0s0ngw43y4'),
            'akses' => 'admin',
        ]);
    }
}

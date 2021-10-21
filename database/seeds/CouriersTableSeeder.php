<?php

use Illuminate\Database\Seeder;
use App\Courier;
class CouriersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['code' => 'petugas lapangan 1','title' => 'Petugas Lapangan 1'],
            ['code' => 'petugas lapangan 2','title' => 'Petugas Lapangan 2'],
            ['code' => 'petugas lapangan 3','title' => 'Petugas Lapangan 3'],
        ];
        Courier::insert($data);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Rekening;
class RekeningTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['bank_name' => 'BCA','atas_nama'=>'RIAN ADRIAN','no_rekening'=>'9658540322']
        ];
        Rekening::insert($data);
    }
}

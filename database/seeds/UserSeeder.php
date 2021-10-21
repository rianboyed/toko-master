<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['name' => 'Rian_Adrian','email' => 'rianadrian@gmail.com','password' => bcrypt('admin123'),'role' => 'admin'];
        User::insert($data);
    }
}

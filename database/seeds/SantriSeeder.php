<?php

use Illuminate\Database\Seeder;
use App\Model\SantriModel;

class SantriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SantriModel::truncate();
        SantriModel::insert([
            ['nama'  => 'Thoriq',
            'email'  => 'thoriq@gmail.com',
            'password'  => bcrypt(123),
            'gender'  => 1],
            ['nama'  => 'Fias',
            'email'  => 'fias@gmail.com',
            'password'  => bcrypt('fias'),
            'gender'  => 1]
        ]);
    }
}

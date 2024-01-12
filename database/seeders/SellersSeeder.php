<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{ Seller };

class SellersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Seller::updateOrCreate([
            'name'=>'Juan',
            'first_name'=>'Perez',
            'second_name'=>'Perez',
            'employee_num'=>'10001'
        ]);

        Seller::updateOrCreate([
            'name'=>'Ruben',
            'first_name'=>'Gonzalez',
            'second_name'=>'Gonzalez',
            'employee_num'=>'10002'
        ]);


        Seller::updateOrCreate([
            'name'=>'Hector',
            'first_name'=>'Garcia',
            'second_name'=>'Garcia',
            'employee_num'=>'10003'
        ]);


        Seller::updateOrCreate([
            'name'=>'Jose',
            'first_name'=>'Lopez',
            'second_name'=>'Lopez',
            'employee_num'=>'10004'
        ]);


       
    }
}

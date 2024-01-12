<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{ Customer };

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::updateOrCreate([
            'name'=>'Jose',
            'first_name'=>'Perez',
            'second_name'=>'Perez',
            'rfc'=>'JJJJ999999',
            'phone'=>'5555555555',
            'email'=>'jperez@fake.com'
        ]);

        Customer::updateOrCreate([
            'name'=>'Felipe',
            'first_name'=>'Perez',
            'second_name'=>'Perez',
            'rfc'=>'FFFF999999',
            'phone'=>'4444444444',
            'email'=>'Fperez@fake.com'
        ]);

        Customer::updateOrCreate([
            'name'=>'Onofre',
            'first_name'=>'Perez',
            'second_name'=>'Perez',
            'rfc'=>'0000999999',
            'phone'=>'333333333',
            'email'=>'operez@fake.com'
        ]);

        Customer::updateOrCreate([
            'name'=>'Messi',
            'first_name'=>'Perez',
            'second_name'=>'Perez',
            'rfc'=>'AAAA888888',
            'phone'=>'8888888888',
            'email'=>'mperez@fake.com'
        ]);

        Customer::updateOrCreate([
            'name'=>'Cristiano',
            'first_name'=>'Perez',
            'second_name'=>'Perez',
            'rfc'=>'CCCC777777',
            'phone'=>'7777777777',
            'email'=>'cperez@fake.com'
        ]);

       
    }
}

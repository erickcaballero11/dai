<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{ Product };

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::updateOrCreate([
            'name'=>'Disco Duro 500 gb',
            'description'=>'Disco Duro SEAGATE 500 gb',
            'unit'=>'Pieza',
            'stock'=>'200',
            'price'=>'280'
        ]);

        Product::updateOrCreate([
            'name'=>'Disco Duro 1 tb',
            'description'=>'Disco Duro 1TB SEAGATE',
            'unit'=>'Pieza',
            'stock'=>'250',
            'price'=>'380'
        ]);

        Product::updateOrCreate([
            'name'=>'MONITOR ACTECK 22"',
            'description'=>'MONITOR ACTECK 22" CAPTIVE 75HZ 5MS',
            'unit'=>'Pieza',
            'stock'=>'10',
            'price'=>'1650'
        ]);

        Product::updateOrCreate([
            'name'=>'MONITOR ACTECK 24"',
            'description'=>'MONITOR ACTECK 24" CAPTIVE BOCINAS SP240 2',
            'unit'=>'Pieza',
            'stock'=>'50',
            'price'=>'31900'
        ]);

        Product::updateOrCreate([
            'name'=>'PROCESADOR ATHLON 3000G',
            'description'=>'PROCESADOR ATHLON 3000G 3.5GHZ',
            'unit'=>'Pieza',
            'stock'=>'920',
            'price'=>'920'
        ]);

        Product::updateOrCreate([
            'name'=>'CORE I3 13100 4 CORE 3.4 GHZ',
            'description'=>'PROCESADOR CORE I3 13100 4 CORE 3.4 GHZ',
            'unit'=>'Pieza',
            'stock'=>'50',
            'price'=>'2690'
        ]);

        Product::updateOrCreate([
            'name'=>'GABINETE ACTECK PERFORMANCE II',
            'description'=>'GABINETE ACTECK PERFORMANCE II  CON FUENTE GENERICA',
            'unit'=>'Pieza',
            'stock'=>'10',
            'price'=>'520'
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{ Orderdetail };

class OrderDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Orderdetail::updateOrCreate([
            'order_id'=>1,
            'product_id'=>1,
            'quantity'=>2,
            'unit_value'=>280,
            'total'=>560
        ]);

        Orderdetail::updateOrCreate([
            'order_id'=>1,
            'product_id'=>2,
            'quantity'=>2,
            'unit_value'=>380,
            'total'=>760
        ]);

        Orderdetail::updateOrCreate([
            'order_id'=>2,
            'product_id'=>1,
            'quantity'=>2,
            'unit_value'=>280,
            'total'=>560
        ]);

        Orderdetail::updateOrCreate([
            'order_id'=>2,
            'product_id'=>3,
            'quantity'=>1,
            'unit_value'=>1650,
            'total'=>1650
        ]);

        Orderdetail::updateOrCreate([
            'order_id'=>2,
            'product_id'=>7,
            'quantity'=>2,
            'unit_value'=>520,
            'total'=>1040
        ]);

        Orderdetail::updateOrCreate([
            'order_id'=>3,
            'product_id'=>1,
            'quantity'=>2,
            'unit_value'=>280,
            'total'=>560
        ]);

        Orderdetail::updateOrCreate([
            'order_id'=>3,
            'product_id'=>2,
            'quantity'=>2,
            'unit_value'=>380,
            'total'=>760
        ]);


        Orderdetail::updateOrCreate([
            'order_id'=>4,
            'product_id'=>6,
            'quantity'=>2,
            'unit_value'=>2690,
            'total'=>5380
        ]);

        Orderdetail::updateOrCreate([
            'order_id'=>4,
            'product_id'=>4,
            'quantity'=>1,
            'unit_value'=>31900,
            'total'=>31900
        ]);

        
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{ Order };

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::updateOrCreate([
            'seller_id'=>1,
            'customer_id'=>1,
            'order'=>'Order-1001',
            'order_date'=>'01/01/2024',
            'total'=>1320,
            'order_wrkflw'=>'Entregada'
        ]);

        Order::updateOrCreate([
            'seller_id'=>1,
            'customer_id'=>2,
            'order'=>'Order-1002',
            'order_date'=>'01/01/2024',
            'total'=>3250,
            'order_wrkflw'=>'Entregada'
        ]);

        Order::updateOrCreate([
            'seller_id'=>2,
            'customer_id'=>2,
            'order'=>'Order-1003',
            'order_date'=>'08/01/2024',
            'total'=>1320,
            'order_wrkflw'=>'Entregada'
        ]);

        Order::updateOrCreate([
            'seller_id'=>3,
            'customer_id'=>4,
            'order'=>'Order-1004',
            'order_date'=>'06/01/2024',
            'total'=>37280,
            'order_wrkflw'=>'Entregada'
        ]);

        Order::updateOrCreate([
            'seller_id'=>1,
            'customer_id'=>1,
            'order'=>'Order-1005',
            'order_date'=>'07/01/2024',
            'total'=>1320,
            'order_wrkflw'=>'Entregada'
        ]);

        Order::updateOrCreate([
            'seller_id'=>1,
            'customer_id'=>4,
            'order'=>'Order-1006',
            'order_date'=>'07/01/2024',
            'total'=>1320,
            'order_wrkflw'=>'Entregada'
        ]);

        Order::updateOrCreate([
            'seller_id'=>1,
            'customer_id'=>3,
            'order'=>'Order-1007',
            'order_date'=>'09/01/2024',
            'total'=>1320,
            'order_wrkflw'=>'Entregada'
        ]);

        Order::updateOrCreate([
            'seller_id'=>1,
            'customer_id'=>1,
            'order'=>'Order-1008',
            'order_date'=>'09/01/2024',
            'total'=>1320,
            'order_wrkflw'=>'Entregada'
        ]);
    }
}

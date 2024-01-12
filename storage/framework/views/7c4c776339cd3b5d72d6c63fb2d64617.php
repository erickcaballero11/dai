


<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="card">
    <div class="card-header">
        <b>Detalle Venta <?php echo e($venta->order); ?></b>
    </div>
    <div class="card-body">
        <h5 class="card-title">Cliente: <?php echo e($venta->cliente->name); ?> <?php echo e($venta->cliente->first_name); ?> <?php echo e($venta->cliente->second_name); ?>  &emsp; &emsp;&emsp; &emsp;<b> Total:  <?php echo e(number_format($venta->total,0)); ?>  </b></h5>
        <h5 class="card-title">  Vendedor: <?php echo e($venta->cliente->name); ?> <?php echo e($venta->cliente->first_name); ?> <?php echo e($venta->cliente->second_name); ?> &emsp; &emsp;&emsp; &emsp; Fecha Compra: <?php echo e(date('d-m-y',strtotime($venta->order_date))); ?>

        &emsp; &emsp;&emsp; &emsp; Estatus Compra:   <?php echo e($venta->order_wrkflw); ?>      </h5>
        
    </div>
</div>

    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Cantidad</th>
                <th>Precio Unitario</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody >
            <?php $__currentLoopData = $venta->productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($producto->producto->name); ?></td>
                <td><?php echo e($producto->producto->description); ?></td>
                <td><?php echo e($producto->quantity); ?></td>
                <td><?php echo e(number_format($producto->unit_value)); ?></td>
                <td><?php echo e(number_format($producto->total,0)); ?></td>
                
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dai\resources\views/ventas/edit.blade.php ENDPATH**/ ?>
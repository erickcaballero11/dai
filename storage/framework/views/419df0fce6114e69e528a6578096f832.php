


<?php $__env->startSection('content'); ?>

<div class="container">
    <?php if(Session::has('mensaje')): ?>
    <div class="alert alert-success alert-dismissible" role="alert">        
        <?php echo e(Session::get('mensaje')); ?>        
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>

    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>Vendedor</th>
                <th>Cliente</th>
                <th>Pedido</th>
                <th>Fecha Pedido</th>
                <th>Total</th>
                <th>Estatus</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody >
            <?php $__currentLoopData = $ventas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $venta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($venta->vendedor->name); ?> <?php echo e($venta->vendedor->first_name); ?> <?php echo e($venta->vendedor->second_name); ?></td>
                <td><?php echo e($venta->cliente->name); ?> <?php echo e($venta->cliente->first_name); ?> <?php echo e($venta->cliente->second_name); ?></td>
                <td><?php echo e($venta->order); ?></td>
                <td><?php echo e($venta->order_date); ?></td>
                <td><?php echo e($venta->total); ?></td>
                <td><?php echo e($venta->order_wrkflw); ?></td>
                <td> <a href=" <?php echo e(url ('/ventas/'.$venta->id.'/edit')); ?> " class="btn btn-warning" > Ver Detalle </a> </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php echo $ventas->links(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dai\resources\views/ventas/index.blade.php ENDPATH**/ ?>
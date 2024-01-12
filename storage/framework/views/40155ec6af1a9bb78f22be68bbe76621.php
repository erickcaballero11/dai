


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
                <th>Nombre</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>RFC</th>
                <th>Telefono</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody >
            <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($cliente->name); ?></td>
                <td><?php echo e($cliente->first_name); ?></td>
                <td><?php echo e($cliente->second_name); ?></td>
                <td><?php echo e($cliente->rfc); ?></td>
                <td><?php echo e($cliente->phone); ?></td>
                <td><?php echo e($cliente->email); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php echo $clientes->links(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dai\resources\views/cliente/index.blade.php ENDPATH**/ ?>
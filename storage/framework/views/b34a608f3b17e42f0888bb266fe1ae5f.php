<?php $__env->startSection('content'); ?>

<div class="container">
    <?php if(Session::has('mensaje')): ?>
    <div class="alert alert-success alert-dismissible" role="alert">        
        <?php echo e(Session::get('mensaje')); ?>        
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>

    
    <a href=" <?php echo e(url('producto/create')); ?>" class= "btn btn-success"> Registrar nuevo producto </a> 
    
    <a href="<?php echo e(url('/descargar-arreglo')); ?>" class="btn btn-primary">Descargar listado en JSON</a>
    
    <a href=" <?php echo e(url('producto/pdf')); ?>" class= "btn btn-success"> Exportar PDF </a> 
    <br><br>

    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Unidad de Medida</th>
                <th>Existencia</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody >
            <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($producto->name); ?></td>
                <td><?php echo e($producto->description); ?></td>
                <td><?php echo e($producto->unit); ?></td>
                <td><?php echo e(number_format($producto->stock,0)); ?></td>
                <td><?php echo e(number_format($producto->price,2)); ?></td>
                <td> <a href=" <?php echo e(url ('/producto/'.$producto->id.'/edit')); ?> " class="btn btn-warning" > Editar </a> </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php echo $productos->links(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dai\resources\views/producto/index.blade.php ENDPATH**/ ?>
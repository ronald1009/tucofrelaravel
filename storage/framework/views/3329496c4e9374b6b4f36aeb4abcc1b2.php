<?php $__env->startSection('title', 'crear cuenta'); ?>

<?php $__env->startSection('content'); ?>

<br>
<h1 class="text-center">cuenta</h1>
<br><br/>
      <a href="/cuenta/create" class="btn btn-primary">Crear Nueva Cuenta</a>
      <br><br/>
      <br>
<div class="row">

    <?php $__currentLoopData = $cuenta; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cuenta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-sm">
        <div class="card" style="width: 18rem;">

            <div class="card-body">
              <h5 class="card-title"> numerodecuenta: <?php echo e($cuenta->numerodecuenta); ?> </h5>
              <h5 class="card-title"> estadodecuenta: <?php echo e($cuenta->estadodecuenta); ?> </h5>
              <h5 class="card-title"> idusuario: <?php echo e($cuenta->idusuario); ?> </h5>



            <div class="col-12">
                <br><br/>
                <a href="/cuenta/<?php echo e($cuenta->id); ?>" class="btn btn-success">Mostrar cuenta</a>
                <br><br/>
                <a href="/cuenta/<?php echo e($cuenta->id); ?>/edit" class="btn btn-warning">Editar cuenta</a>
                <br><br/>
                <form method="POST" action="<?php echo e(route('cuenta.destroy', $cuenta->id)); ?>">
                    <?php echo method_field('DELETE'); ?>
                    <?php echo csrf_field(); ?>
                    <button class="btn btn-danger" type="submit">Eliminar cuenta</button>
                </form>
            </div>



            </div>
          </div>

    </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\proyectolaravel\tucofre-app\resources\views/cuenta/index.blade.php ENDPATH**/ ?>
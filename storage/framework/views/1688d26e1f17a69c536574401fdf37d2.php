<?php $__env->startSection('title', 'crear transaccion'); ?>

<?php $__env->startSection('content'); ?>

<br>
<h1 class="text-center">Transaccion</h1>
<br><br/>
      <a href="/transaccion/create" class="btn btn-primary">Crear Nueva Transaccion</a>
      <br><br/>
      <br>
<div class="row">

    <?php $__currentLoopData = $transaccion; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaccion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-sm">
        <div class="card" style="width: 18rem;">
            <img style="height: 200px; whidth: 250px; margin: 20px" src="<?php echo e(Storage::url($transaccion->imagen)); ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"> tipo de transaccion: <?php echo e($transaccion->idtipodetransaccion); ?> </h5>
              <h5 class="card-title"> municipio: <?php echo e($transaccion->idmunicipio); ?> </h5>
              <h5 class="card-title"> fecha: <?php echo e($transaccion->fecha); ?> </h5>
              <h5 class="card-title"> hora: <?php echo e($transaccion->hora); ?> </h5>
              <h5 class="card-title">  monto: <?php echo e($transaccion->monto); ?> </h5>
              <h5 class="card-title"> cuenta origen: <?php echo e($transaccion->idcuentaorigen); ?> </h5>
              <h5 class="card-title"> cuenta destino: <?php echo e($transaccion->idcuentadestino); ?> </h5>


            <div class="col-12">
                <br><br/>
                <a href="/transaccion/<?php echo e($transaccion->id); ?>" class="btn btn-success">Mostrar Transaccion</a>
                <br><br/>
                <a href="/transaccion/<?php echo e($transaccion->id); ?>/edit" class="btn btn-warning">Editar Transaccion</a>
                <br><br/>
                <form method="POST" action="<?php echo e(route('transaccion.destroy', $transaccion->id)); ?>">
                    <?php echo method_field('DELETE'); ?>
                    <?php echo csrf_field(); ?>
                    <button class="btn btn-danger" type="submit">Eliminar Transaccion</button>
                </form>
            </div>



            </div>
          </div>

    </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\proyectolaravel\tucofre-app\resources\views/transaccion/index.blade.php ENDPATH**/ ?>
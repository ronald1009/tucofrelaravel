<?php $__env->startSection('title', 'crear transaccion'); ?>

<?php $__env->startSection('content'); ?>

<br>
<h3 class="text-center">EDITAR INFORMACION DE TRANSACCION</h3>

<form
action="/transaccion/<?php echo e($transaccion->id); ?>" method="POST" enctype="multipart/form-data"
class="row g-3 needs-validation" novalidate>

    <?php echo method_field('PUT'); ?>
    <?php echo csrf_field(); ?>


    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">idtipodetransaccion</label>
        <input type="text" class="form-control" id="idtipodetransaccion"  name="idtipodetransaccion" value="<?php echo e($transaccion->idtipodetransaccion); ?>" required disabled>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>

      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">idmunicipio</label>
        <input type="text" class="form-control" id="idmunicipio"  name="idmunicipio" value="<?php echo e($transaccion->idmunicipio); ?>"  required disabled>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>

      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">fecha</label>
        <input type="date" class="form-control" id="fecha"  name="fecha" value="<?php echo e($transaccion->fecha); ?>" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>

      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">hora</label>
        <input type="time" class="form-control" id="hora"  name="hora" value="<?php echo e($transaccion->hora); ?>" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>

      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">monto</label>
        <input type="number" class="form-control" id="monto" name="monto" value= "<?php echo e($transaccion->monto); ?>" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>

      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">idcuentaorigen</label>
        <input type="text" class="form-control" id="idcuentaorigen"  name="idcuentaorigen"  value="<?php echo e($transaccion->idcuentaorigen); ?>"  required disabled>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>

      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">idcuentadestino</label>
        <input type="text" class="form-control" id="idcuentadestino"  name="idcuentadestino" value="<?php echo e($transaccion->idcuentadestino); ?>"  required disabled>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>



    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
        <label class="form-check-label" for="invalidCheck">
          Acepto terminos y condiciones
        </label>
        <div class="invalid-feedback">
          You must agree before submitting.
        </div>
      </div>
    </div>

    <br>

    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">cargar imagen</label>
        <input id="imagen" type="file"   name="imagen"  required>



    <div class="col-12">
      <button class="btn btn-primary" type="submit">Guardar</button>
      <br><br/>
      <a href="/transaccion" class="btn btn-dark">Volver</a>
    </div>
  </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\proyectolaravel\tucofre-app\resources\views/transaccion/edit.blade.php ENDPATH**/ ?>
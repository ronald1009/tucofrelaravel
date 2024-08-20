<?php $__env->startSection('title', 'crear cuenta'); ?>

<?php $__env->startSection('content'); ?>

<br>
<h3 class="text-center">CONSULTA DE CUENTA</h3>

<form
 enctype="multipart/form-data"
class="row g-3 needs-validation" novalidate>
    <?php echo csrf_field(); ?>


    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">numerodecuenta</label>
        <input type="text" class="form-control" id="numerodecuenta"  name="numerodecuenta" value="<?php echo e($cuenta->numerodecuenta); ?>" required disabled>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>

      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">estadodecuenta</label>
        <input type="text" class="form-control" id="estadodecuenta"  name="estadodecuenta" value="<?php echo e($cuenta->estadodecuenta); ?>"  required disabled>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>

      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">idusuario</label>
        <input type="text" class="form-control" id="idusuario"  name="idusuario" value="<?php echo e($cuenta->idusuario); ?>" required disabled>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>



    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required disabled>
        <label class="form-check-label" for="invalidCheck">
          Acepto terminos y condiciones
        </label>
        <div class="invalid-feedback">
          You must agree before submitting.
        </div>
      </div>
    </div>

    <br>


    <div class="col-12">

    <br/>
      <a href="/cuenta" class="btn btn-dark">Volver</a>
    </div>
  </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\proyectolaravel\tucofre-app\resources\views/cuenta/show.blade.php ENDPATH**/ ?>
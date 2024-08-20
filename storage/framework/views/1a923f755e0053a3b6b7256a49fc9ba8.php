<?php $__env->startSection('title', 'crear cuenta'); ?>

<?php $__env->startSection('content'); ?>

<br>
<h3 class="text-center">CREAR CUENTA</h3>

<form
action="/cuenta" method="POST" enctype="multipart/form-data"
class="row g-3 needs-validation" novalidate>
    <?php echo csrf_field(); ?>


    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">numerodecuenta</label>
        <input type="text" class="form-control" id="numerodecuenta"  name="numerodecuenta" value="1" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>

      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">estadodecuenta</label>
        <input type="text" class="form-control" id="estadodecuenta"  name="estadodecuenta" value="activo-inactivo"  required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>

      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">idusuario</label>
        <input type="text" class="form-control" id="idusuario"  name="idusuario" value="1" required>
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




    <div class="col-12">
      <button class="btn btn-primary" type="submit">Guardar</button>
      <br><br/>
      <a href="/cuenta" class="btn btn-dark">Volver</a>
    </div>
  </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\proyectolaravel\tucofre-app\resources\views/cuenta/create.blade.php ENDPATH**/ ?>
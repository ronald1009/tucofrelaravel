@extends('layouts.app')

@section('title', 'crear transaccion')

@section('content')

<form
action="/transaccion" method="POST"
class="row g-3 needs-validation" novalidate>
    @csrf


    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">idtipodetransaccion</label>
        <input type="text" class="form-control" id="idtipodetransaccion"  name="idtipodetransaccion" value="escribe tu respuesta" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>

      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">idmunicipio</label>
        <input type="text" class="form-control" id="idmunicipio"  name="idmunicipio" value="escribe tu respuesta" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>

      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">fecha</label>
        <input type="text" class="form-control" id="fecha"  name="fecha" value="escribe tu respuesta" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>

      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">hora</label>
        <input type="text" class="form-control" id="hora"  name="hora" value="escribe tu respuesta" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>

      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">monto</label>
        <input type="text" class="form-control" id="monto" name="monto" value="escribe tu respuesta" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>

      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">idcuentaorigen</label>
        <input type="text" class="form-control" id="idcuentaorigen"  name="idcuentaorigen"  value="escribe tu respuesta" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>

      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">idcuentadestino</label>
        <input type="text" class="form-control" id="idcuentadestino"  name="idcuentadestino" value="escribe tu respuesta" required>
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
    <div class="col-12">
      <button class="btn btn-primary" type="submit">Guardar</button>
    </div>
  </form>

@endsection

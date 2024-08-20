@extends('layouts.app')

@section('title', 'crear cuenta')

@section('content')

<br>
<h3 class="text-center">EDITAR INFORMACION DE CUENTA</h3>

<form
action="/cuenta/{{$cuenta->id}}" method="POST" enctype="multipart/form-data"
class="row g-3 needs-validation" novalidate>

    @method('PUT')
    @csrf


    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">numerodecuenta</label>
        <input type="text" class="form-control" id="numerodecuenta"  name="numerodecuenta" value="{{$cuenta->numerodecuenta}}" required disabled>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>

      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">estadodecuenta</label>
        <input type="text" class="form-control" id="estadodecuenta"  name="estadodecuenta" value="{{$cuenta->estadodecuenta}}"  required >
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>

      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">idusuario</label>
        <input type="tex" class="form-control" id="idusuario"  name="idusuario" value="{{$cuenta->idusuario}}" required disabled>
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

@endsection

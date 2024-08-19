@extends('layouts.app')

@section('title', 'crear transaccion')

@section('content')

<br>
<h3 class="text-center">CONSULTA DE TRANSACCION</h3>

<form
 enctype="multipart/form-data"
class="row g-3 needs-validation" novalidate>
    @csrf


    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">idtipodetransaccion</label>
        <input type="text" class="form-control" id="idtipodetransaccion"  name="idtipodetransaccion" value="{{$transaccion->idtipodetransaccion}}" required disabled>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>

      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">idmunicipio</label>
        <input type="text" class="form-control" id="idmunicipio"  name="idmunicipio" value="{{$transaccion->idmunicipio}}"  required disabled>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>

      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">fecha</label>
        <input type="text" class="form-control" id="fecha"  name="fecha" value="{{$transaccion->fecha}}" required disabled>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>

      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">hora</label>
        <input type="text" class="form-control" id="hora"  name="hora" value="{{$transaccion->hora}}" required disabled>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>

      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">monto</label>
        <input type="text" class="form-control" id="monto" name="monto" value="{{$transaccion->monto}}"  required disabled>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>

      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">idcuentaorigen</label>
        <input type="text" class="form-control" id="idcuentaorigen"  name="idcuentaorigen"  value="{{$transaccion->idcuentaorigen}}"  required disabled>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>

      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">idcuentadestino</label>
        <input type="text" class="form-control" id="idcuentadestino"  name="idcuentadestino" value="{{$transaccion->idcuentadestino}}"  required disabled>
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

    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">cargar imagen</label>
        <input id="imagen" type="file"   name="imagen"  required disabled>



    <div class="col-12">

    <br/>
      <a href="/transaccion" class="btn btn-dark">Volver</a>
    </div>
  </form>

@endsection

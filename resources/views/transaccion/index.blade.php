@extends('layouts.app')

@section('title', 'crear transaccion')

@section('content')

<br>
<h3 class="text-center">transaccion</h3>
<br>
<div class="row">

    @foreach ($course as $transaccion)
    <div class="col-sm">
        <div class="card" style="width: 18rem;">
            <img style="height: 200px; whidth: 250px; margin: 20px" src="{{Storage::url($transaccion->imagen) }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"> tipo de transaccion: {{$transaccion->idtipodetransaccion}} </h5>
              <h5 class="card-title"> municipio: {{$transaccion->idmunicipio}} </h5>
              <h5 class="card-title"> fecha: {{$transaccion->fecha}} </h5>
              <h5 class="card-title"> hora: {{$transaccion->hora}} </h5>
              <h5 class="card-title">  monto: {{$transaccion->monto}} </h5>
              <h5 class="card-title"> cuenta origen: {{$transaccion->idcuentaorigen}} </h5>
              <h5 class="card-title"> cuenta destino: {{$transaccion->idcuentadestino}} </h5>

            </div>
          </div>

    </div>

    @endforeach

</div>


@endsection

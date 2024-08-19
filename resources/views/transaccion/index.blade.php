@extends('layouts.app')

@section('title', 'crear transaccion')

@section('content')

<br>
<h1 class="text-center">Transaccion</h1>
<br><br/>
      <a href="/transaccion/create" class="btn btn-primary">Crear Nueva Transaccion</a>
      <br><br/>
      <br>
<div class="row">

    @foreach ($transaccion as $transaccion)
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


            <div class="col-12">
                <br><br/>
                <a href="/transaccion/{{$transaccion->id}}" class="btn btn-success">Mostrar Transaccion</a>
                <br><br/>
                <a href="/transaccion/{{$transaccion->id}}/edit" class="btn btn-warning">Editar Transaccion</a>
                <br><br/>
                <form method="POST" action="{{ route('transaccion.destroy', $transaccion->id) }}">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-primary" type="submit">Eliminar Transaccion</button>
                </form>
            </div>



            </div>
          </div>

    </div>

    @endforeach

</div>


@endsection

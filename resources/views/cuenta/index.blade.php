@extends('layouts.app')

@section('title', 'crear cuenta')

@section('content')

<br>
<h1 class="text-center">cuenta</h1>
<br><br/>
      <a href="/cuenta/create" class="btn btn-primary">Crear Nueva Cuenta</a>
      <br><br/>
      <br>
<div class="row">

    @foreach ($cuenta as $cuenta)
    <div class="col-sm">
        <div class="card" style="width: 18rem;">

            <div class="card-body">
              <h5 class="card-title"> numerodecuenta: {{$cuenta->numerodecuenta}} </h5>
              <h5 class="card-title"> estadodecuenta: {{$cuenta->estadodecuenta}} </h5>
              <h5 class="card-title"> idusuario: {{$cuenta->idusuario}} </h5>



            <div class="col-12">
                <br><br/>
                <a href="/cuenta/{{$cuenta->id}}" class="btn btn-success">Mostrar cuenta</a>
                <br><br/>
                <a href="/cuenta/{{$cuenta->id}}/edit" class="btn btn-warning">Editar cuenta</a>
                <br><br/>
                <form method="POST" action="{{ route('cuenta.destroy', $cuenta->id) }}">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger" type="submit">Eliminar cuenta</button>
                </form>
            </div>



            </div>
          </div>

    </div>

    @endforeach

</div>


@endsection

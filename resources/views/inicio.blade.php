@extends("layout")

@section("title", "Inicio")

@section("content")
    <h1>Inicio</h1>

    <ul>
        @forelse($operaciones as $operacion)
            <li>{{$operacion->monto}}</li>
        @empty
            <li>No hay operaciones</li>
        @endforelse
    </ul>
@endsection

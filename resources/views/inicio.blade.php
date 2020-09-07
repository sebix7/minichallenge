@extends("layout")

@section("title", "Inicio")

@section("content")
    <h1>Inicio</h1>

    <ul>
        @forelse($operaciones as $operacion)
            <li>{{$operacion["title"]}}</li>
        @empty
            <li>No hay operaciones</li>
        @endforelse
    </ul>
@endsection

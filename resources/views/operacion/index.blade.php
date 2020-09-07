@extends("layout")

@section("title", "Listado de operaciones")

@section("content")
    <form method="GET">
        <label>Seleccione tipo de operación<br>
            <select name="tipo">
                <option value="ingreso" selected>Ingreso</option>
                <option value="egreso">Egreso</option>
            </select><br>
        </label><br>
        <button>Mostrar</button>
    </form><br>

    @isset($_GET["tipo"])
        <ul>
            @forelse($operaciones as $operacion)
                @if($operacion->tipo == $_GET["tipo"])
                    <li>{{$operacion->monto}}</li>
                    <a href="{{$operacion->id}}/editar">Editar</a>
                @endif
            @empty
                <li>No hay operaciones</li>
            @endforelse
        </ul>
    @endisset

@endsection

@extends("layout")

@section("title", "Registrar operación")

@section("content")
    <h1>Operaciones</h1>
    <strong>{{$mensaje ?? ''}}</strong>
    @include("partials.validation-errors")
    <form method="POST" action="{{route("operacion.store")}}">
        @csrf
        <label>Ingrese concepto<br>
            <input type="text" name="concepto"><br>
        </label>
        <label>Ingrese monto<br>
            <input type="number" min="0" name="monto"><br>
        </label>
        <label>Seleccione fecha<br>
            <input type="date" name="fecha"><br>
        </label>
        <label>Seleccione tipo de operación<br>
            <select name="tipo">
                <option value="ingreso" selected>Ingreso</option>
                <option value="egreso">Egreso</option>
            </select><br>
        </label><br>
        <button>Enviar</button><br>
    </form><br>

    <a href="/operacion/listar">Mostrar listado de operaciones</a>
@endsection

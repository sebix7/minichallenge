@extends("layout")

@section("title", "Editar operación")

@section("content")
    @include("partials.validation-errors")
    <form method="POST" action="{{route("operacion.update", $operacion)}}">
        @csrf @method("PATCH")
        <label>Ingrese nuevo concepto<br>
            <input type="text" name="concepto" value="{{$operacion->concepto}}"><br>
        </label>
        <label>Ingrese nuevo monto<br>
            <input type="number" min="0" name="monto" value="{{$operacion->monto}}"><br>
        </label>
        <label>Seleccione nueva fecha<br>
            <input type="date" name="fecha" value="{{$operacion->fecha}}"><br>
        </label><br>
        <button>Actualizar</button><br>
    </form><br>
@endsection

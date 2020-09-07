@extends("layout")

@section("title", "Operaciones")

@section("content")
    <h1>Operaciones</h1>
    @if($errors->any())
        @foreach($errors->all() as $error)
            {{$error}}<br>
        @endforeach
    @endif
    <form method="POST" action="{{ route("operaciones") }}">
        @csrf
        <input type="text" name="concepto" placeholder="Ingrese concepto"><br>
        <input type="number" min="0" name="monto" placeholder="Ingrese monto"><br>
        <input type="date" name="fecha" placeholder="Ingrese fecha"><br>
        <select name="tipo" required>
            <option value="ingreso" selected>Ingreso</option>
            <option value="egreso">Egreso</option>
        </select><br>
        <button>Enviar</button>
    </form>
@endsection

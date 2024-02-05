<x-app-layout>
    <div class="detallesCoche">
        <h2>{{$datos['modelo']}}</h2>
        <h3>{{$datos['precio']}}€</h3>
        <img src="../img/{{$datos['imagen']}}" alt="coche" width="100px">
        <a href="{{ route('citas.create', ['coche_id' => $datos['id']]) }}">Reservar cita</a>
    </div>
</x-app-layout>

<x-app-layout>
    <a href="/citas/create">Nuevo Marca</a>
    <table>
        <tr>
            <th>Fecha</th>
            <th>Cliente</th>
            <th>Acciones</th>
        </tr>
        @foreach ($citas as $cita)
            <tr>
                <td>{{$cita->fecha}}</td>
            </tr>
        @endforeach
    </table>
</x-app-layout>

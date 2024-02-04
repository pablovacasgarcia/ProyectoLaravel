<x-app-layout>
    <table>
        <tr>
            <th>Fecha</th>
            <th>ID Cliente</th>
            <th>ID Coche</th>
            <th>Acciones</th>
        </tr>
        @foreach ($citas as $cita)
            <tr>
                <td>{{$cita->fecha}}</td>
                <td>{{$cita->user_id}}</td>
                <td>{{$cita->coche_id}}</td>
            </tr>
        @endforeach
    </table>
</x-app-layout>

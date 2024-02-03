<x-app-layout>
    <table>
        <tr>
            <th>Fecha</th>
            <th>ID Cliente</th>
            <th>Acciones</th>
        </tr>
        @foreach ($citas as $cita)
            <tr>
                <td>{{$cita->fecha}}</td>
            </tr>
        @endforeach
    </table>
</x-app-layout>

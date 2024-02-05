
<x-app-layout>
    <table>
        <tr>
            <th>Fecha</th>
            <th>ID Coche</th>
            <th>Acciones</th>
        </tr>
        @foreach ($citas as $cita)
            <tr>
                <td>{{$cita->fecha}}</td>
                <td>{{$cita->user_id}}</td>
                <td>{{$cita->coche_id}}</td>
                <td>
                    <form action="{{ route('citas.destroy', $cita->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Cancelar cita</button>
                    </form>
            </tr>
        @endforeach
    </table>
</x-app-layout>

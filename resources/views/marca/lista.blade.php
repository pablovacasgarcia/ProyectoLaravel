<x-app-layout>
    <a href="/marca/create">Nuevo Marca</a>
    <table>
        <tr>
            <th>Marca</th>
            <th>Acciones</th>
        </tr>
        @foreach ($marcas as $marca)
            <tr>
                <td>{{$marca->nombre}}</td>
            </tr>
        @endforeach
    </table>
</x-app-layout>

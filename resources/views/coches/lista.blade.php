<x-app-layout>
    <a href="/coches/create">Nuevo Coche</a>
    <table>
        <tr>
            <th>Modelo</th>
            <th>Precio</th>
            <th>Imagen</th>
            <th>Marca</th>
            <th>Acciones</th>
        </tr>
        @foreach ($coches as $coche)
            <tr>
                <td>{{$coche->modelo}}</td>
                <td>{{$coche->precio}}</td>
                <td>{{$coche->imagen}}</td>
                <td>{{$coche->marca_id}}</td>

                <td>
                    
                    <a href="{{ route('coches.edit', $coche->id) }}">Editar</a>
                    
            </tr>
        @endforeach
    </table>
</x-app-layout>



<x-app-layout>
    <style>
       table{
        
       }
    </style>
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
                    <form action="{{ route('coches.destroy', $coche->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Borrar</button>
                    </form>
                    
            </tr>
        @endforeach
    </table>
</x-app-layout>



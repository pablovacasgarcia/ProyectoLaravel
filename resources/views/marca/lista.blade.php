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
                <td>
                    <a href="{{ route('marca.edit', $marca->id) }}">Editar</a>
                    <form action="{{ route('marca.destroy', $marca->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Borrar</button>
                    </form>
            </tr>
        @endforeach
    </table>
</x-app-layout>

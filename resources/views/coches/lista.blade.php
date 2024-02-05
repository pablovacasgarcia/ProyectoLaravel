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
                <td>{{$coche->precio}}€</td>
                <td>{{$coche->imagen}}</td>
                <td>{{$coche->marca_id}}</td>

                <td>
                    
                    <a href="{{ route('coches.edit', $coche->id) }}"> <button class="boton"> Editar</button></a>
                    <form action="{{ route('coches.destroy', $coche->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="boton" type="submit">Borrar</button>
                    </form>
                    
            </tr>
        @endforeach
    </table>




    <style>
        *{
            color: white
        }
       table{
            margin: auto;
            border: 1px solid white;
            margin-top: 10vh;
        }
        th, td{
            border: 1px solid white;
            padding: 1rem

        }

        .boton{
            border: 1px solid white;
            box-sizing: border-box;
            background-color: white;
            color: rgb(17 24 39 / var(--tw-bg-opacity));
            width: 5rem !important;
            border-radius: 10px;
            margin: 0.3rem
        }
        .boton:hover{
            background-color: rgb(17 24 39 / var(--tw-bg-opacity));
            color: white;
        }
        th{
            background-color: rgba(220, 220, 220, 0.362);
        }


    </style>
</x-app-layout>



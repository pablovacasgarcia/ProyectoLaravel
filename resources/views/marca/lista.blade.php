<x-app-layout>
    <table>
        <tr>
            <th>ID</th>
            <th>Marca</th>
            <th>Acciones</th>
        </tr>
        @foreach ($marcas as $marca)
            <tr>
                <td>{{$marca->id}}</td>
                <td>{{$marca->nombre}}</td>
                <td>
                    <a href="{{ route('marca.edit', $marca->id) }}"> <button class="boton">Editar</button></a>
                    <form action="{{ route('marca.destroy', $marca->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="boton" type="submit">Borrar</button>
                    </form>
            </tr>
        @endforeach
    </table>
    <a href="/marca/create"><button  class="nuevoMarca">Registrar una Marca</button></a>




    <style>
        *{
            color: white
        }
        .nuevoMarca{
            width: 100vw;
            text-align: center;
        }
        .nuevoMarca:hover{
            text-decoration: underline
        }
       table{
            margin: auto;
            border: 1px solid white;
            margin-top: 10vh;
            margin-bottom: 2vh
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
        td:nth-child(3){
            display: flex;
        }


    </style>
</x-app-layout>

<x-app-layout>
    <h1>Lista de citas</h1>
    <table >
        <tr>
            <th>Fecha</th>
            <th>ID Cliente</th>
            <th>ID Coche</th>
            <th>Acciones</th>
        </tr>
        @foreach ($citas as $cita)
            @if(strtotime($cita->fecha) >= strtotime('today'))
                <tr>
                    <td>{{$cita->fecha}}</td>
                    <td >{{$cita->user_id}}</td>
                    <td>{{$cita->coche_id}}</td>
                    <td>
                        <form action="{{ route('citas.destroy', $cita->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="boton" type="submit">Cancelar cita</button>
                        </form>
                    </td>
                </tr>
            @else
                <tr class="pasada">
                    <td>{{$cita->fecha}}</td>
                    <td >{{$cita->user_id}}</td>
                    <td>{{$cita->coche_id}}</td>
                    <td>
                        <form action="{{ route('citas.destroy', $cita->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="boton" type="submit">Borrar cita</button>
                        </form>
                    </td>
                </tr>
            @endif
        @endforeach
    </table>


    <style>
         *{
            color: white
        }
       table{
            margin: auto;
            border: 1px solid white;
            margin-top: 4vh;
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
            width: 7rem !important;
            border-radius: 10px;
            margin: 0.3rem;
            width: 200px;

        }
        .boton:hover{
            background-color: rgb(17 24 39 / var(--tw-bg-opacity));
            color: white;
        }
        th{
            background-color: rgba(220, 220, 220, 0.362);

        }

        .pasada{
            background-color: rgba(251, 251, 252, 0.1);
        }

        .pasada button{
            background-color: rgba(251, 251, 252, 0.28);
        }

    </style>
</x-app-layout>

<x-app-layout>
    <div class="detallesCoche">
        <div>
                <h2>{{$datos['modelo']}}</h2>
                <h3>{{$datos['precio']}}€</h3>
                <a href="{{ route('citas.create', ['coche_id' => $datos['id']]) }}"><button class="boton">Reservar cita</button></a>
        </div>
        <div>
            <img src="../img/{{$datos['imagen']}}" alt="coche" width="100px">
        </div>
    </div>


    <style>

        .detallesCoche{
            display: flex;
            flex-direction: column;
            margin-left: 20vw;
            margin-top: 5vh;
        }
        .detallesCoche>div{
            display: flex;
            width: 60vw;
            justify-content: space-between;
            align-items: center;
        }
        img{
            width: 60vw;
            height: 30rem;
            border-radius: 20px;
            object-fit: cover;
        }

        h2{
            font-size: 200%;
        }

        h2, h3{
            color: white;
            padding: 1rem;
        }
        .boton{
            top: -20%;
            border: 1px solid white;
            box-sizing: border-box;
            background-color: white;
            color: rgb(17 24 39 / var(--tw-bg-opacity));
            width: 7rem !important;
            border-radius: 10px;
            margin: 0.3rem
        }
        .boton:hover{
            background-color: rgb(17 24 39 / var(--tw-bg-opacity));
            color: white;
        }
    </style>
</x-app-layout>

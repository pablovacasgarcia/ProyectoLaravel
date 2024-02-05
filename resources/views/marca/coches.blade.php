<x-app-layout>
    @foreach($coches as $coche)
        <x-nav-link class="coche" :href="route('coches.show', $coche['id'])">
            <div class="cocheDatos">
                <h2>{{$coche['modelo']}}</h2>
                <p>Desde: {{$coche['precio']}}€</p>
            </div>
            <div class="cocheImagen">
                <img src="../img/{{$coche['imagen']}}" alt="coche">
            </div>
                
        </x-nav-link>
    @endforeach
</x-app-layout>

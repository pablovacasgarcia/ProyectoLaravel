<x-app-layout>
    @foreach($coches as $coche)
        <x-nav-link class="coche" :href="route('coches.show', $coche['id'])">
            <div class="coche">
                <img src="../img/{{$coche['imagen']}}" alt="coche">
                <p>{{$coche['modelo']}}</p>
            </div>
        </x-nav-link>
    @endforeach
</x-app-layout>

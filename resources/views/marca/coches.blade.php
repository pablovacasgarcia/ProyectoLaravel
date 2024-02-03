<x-app-layout>
    @foreach($coches as $coche)
        <div class="coche">
            <img src="../img/{{$coche['imagen']}}" alt="coche">
            <p>{{$coche['modelo']}}</p>
        </div>
    @endforeach
</x-app-layout>

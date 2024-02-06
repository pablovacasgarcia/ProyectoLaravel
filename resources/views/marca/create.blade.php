<x-app-layout>
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Añadir marca</h1>
            <div class="volver">
                <a style="margin: 70px;" class="enlaceButton" href="{{ route('marca.index')}}" class="btn btn-primary">Volver</a>
            </div>
            <div class="formulario">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
                <form class= "formulario-inputs"method="post" action="{{ route('marca.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" placeholder="Nombre" class="form-control" name="nombre" id="nombre"/>
                    </div>


                    <button type="submit" class="btn btn-primary">Añadir marca</button>
                </form>
            </div>


        </div>
    </div>
</x-app-layout>

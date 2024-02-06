
<x-app-layout>
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Editar marca</h1>
            <div>
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
                <form method="post" class="formulario-inputs" action="{{ route('marca.update', $marca->id)   }}" >
                    @csrf
                    @method("PUT")
                    

                    <div class="form-group">
                        <label for="nombre">Marca:</label>
                        <input value="{{$marca->nombre}}" type="text" class="form-control" name="nombre" id="nombre"/>
                    </div>
                    
                    

                    <button type="submit" class="btn btn-primary">Editar marca</button>
                </form>
            </div>
            

        </div>
    </div>



    
</x-app-layout>
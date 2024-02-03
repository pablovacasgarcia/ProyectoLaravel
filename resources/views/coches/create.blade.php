<x-app-layout>
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Añadir coche</h1>
            <div>
                <a style="margin: 19px;" href="{{ route('coches.index')}}" class="btn btn-primary">Volver</a>
            </div>
            <div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
                <form method="post" action="{{ route('coches.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="marca_id">Marca:</label>
                        <select class="form-control" name="marca_id" id="marca_id">
                            @foreach($marcas as $marca)
                                <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="modelo">Modelo:</label>
                        <input type="text" class="form-control" name="modelo" id="modelo"/>
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio:</label>
                        <input type="text" class="form-control" name="precio" id="precio"/>
                    </div>
                    <div class="form-group">
                        <label for="imagen">Imagen:</label>
                        <input type="file" class="form-control" name="imagen" id="imagen"/>
                    </div>

                    <button type="submit" class="btn btn-primary">Añadir coche</button>
                </form>
            </div>
            

        </div>
    </div>
</x-app-layout>
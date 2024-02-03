<x-app-layout>
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Añadir marca</h1>
            <div>
                <a style="margin: 19px;" href="{{ route('marca.index')}}" class="btn btn-primary">Volver</a>
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
                <form method="post" action="{{ route('marca.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" id="nombre"/>
                    </div>


                    <button type="submit" class="btn btn-primary">Añadir coche</button>
                </form>
            </div>


        </div>
    </div>
</x-app-layout>

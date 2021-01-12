<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Baja') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{route('activo.search',$activos->numero_serie)}}" class="row g-3">
                    @csrf
                    <div class="col-md-6">
                        <label for="">Nombre Activo</label>
                        <input type="text" class="form-control" value="">
                    </div>
                    <div class="col-md-6">
                        <label for="">No. Serie</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label for="">Categoría</label>
                            @foreach($categorias as $categoria)

                            @endforeach
                        <input type="text">
                    </div>
                    <div class="col-md-4">
                        <label for="">Tipo</label>
                            @foreach($tipos as $tipo)

                            @endforeach
                        </select>
                        <input type="text">
                    </div>
                    <div class="col-md-4">
                        <label for="">Marca</label>
                        <select name="marca_id" id="marca_id" class="form-select">
                            @foreach($marcas as $marca)
                                <option value="{{$marca->id}}">{{$marca->marca}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="modelo">Modelo</label>
                        <input type="text" class="form-control" name="modelo">
                    </div>
                    <div class="col-md-4">
                        <label for="fecha_adquisicion">Fecha Adquisición</label>
                        <input type="date" class="form-control" name="fecha_adquisicion">
                    </div>
                    <div class="col-md-4">
                        <label for="estado_id">Estado</label>
                        <select name="estado_id" id="estado_id" class="form-select">
                            @foreach($estados as $estado)
                                <option value="{{$estado->id}}">{{$estado->estado}}</option>
                            @endforeach
                        </select>
                        <input type="text">
                    </div>
                    <a href="{{route('baja.index')}}" class="btn btn-default">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Baja') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{route('activo.search')}}" class="row g-3">

                        <div class="col-md-3 ml-3">
                            <label for="">No. Serie</label>
                            <input type="text" class="form-control" name="numero_serie">
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-outline-primary">Buscar</button>
                        </div>

                        <div class="col-md-3 ml-3">
                            <label for="">Categoría</label>

                            @foreach($activos as $activo)
                                @foreach($categorias as $categoria)
                                    @if($activo->categoria_id == $categoria->id)
                                        <input type="text" class="form-control" value="{{$categoria->categoria}}">
                                    @endif
                                @endforeach
                            @endforeach

                        </div>
                        <div class="col-md-3">
                            <label for="">Tipo</label>
                            @foreach($activos as $activo)
                                @foreach($tipos as $tipo)
                                    @if($activo->tipo_activo_id == $tipo->id)
                                        <input type="text" class="form-control" value="{{$tipo->tipo}}">
                                    @endif
                                @endforeach
                                    <input type="hidden" value="{{$activo->id}}" name="activo_id">
                            @endforeach
                        </div>
                        <div class="col-md-3">
                            <label for="">Marca</label>
                            @foreach($activos as $activo)
                                @foreach($marcas as $marca)
                                    @if($activo->marca_id == $marca->id)
                                        <input type="text" class="form-control" value="{{$marca->marca}}">
                                    @endif
                                @endforeach
                            @endforeach
                        </div>
                        <div class="col-md-3 ml-3">
                            <label for="modelo">Modelo</label>
                            @foreach($activos as $activo)
                                <input type="text" class="form-control" value="{{$activo->modelo}}">
                            @endforeach
                        </div>
                        <div class="col-md-3">
                            <label for="fecha_adquisicion">Fecha Adquisición</label>
                            @foreach($activos as $activo)
                                <input type="text" class="form-control" value="{{$activo->fecha_adquisicion}}">
                            @endforeach
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="estado_id">Estado</label>
                            @foreach($activos as $activo)
                                @foreach($estados as $estado)
                                    @if($activo->estado_id == $estado->id)
                                        <input type="text" class="form-control" value="{{$estado->estado}}">
                                    @endif
                                @endforeach
                            @endforeach
                        </div>
                </form>
            </div>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <form action="{{route('baja.store')}}" method="post" class="row g-3">
                            @csrf
                            <div class="col-md-3">
                                <label for="activo_id">Id Activo</label>
                                <input type="text" name="activo_id" value="{{$activo->id}}" class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label for="">Fecha</label>
                                <input type="date" value="<?php echo date("Y-m-d");?>" name="fecha_baja" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label for="">Tipo de Baja</label>
                                <select name="tipo_baja_id" id="tipo_baja_id" class="form-select">
                                    @foreach($tiposbaja as $tipo)
                                        <option class="form-select" value="{{$tipo->id}}">{{$tipo->tipo}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="">Observación</label>
                                <input type="text" class="form-control" name="observacion">
                            </div>
                            <div>{{ Auth::user()->id }}</div>
                            <input type="hidden" value="{{Auth::user()->id}}" name="usuario_id">
                            <a href="{{route('baja.index')}}" class="btn btn-outline-default">Cancelar</a>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>

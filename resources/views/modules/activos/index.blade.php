<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de Activos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <a href="{{route('activo.create')}}" class="btn btn-primary mb-3 mt-3">Crear Activo</a>
                            @if(session('message'))
                                <div class="alert alert-{{session('type')}} mt-2" role="alert">
                                    {{session('message')}}
                                </div>
                            @endif
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Nombre Activo</th>
                                        <th>No. Serie</th>
                                        <th>Modelo</th>
                                        <th>Fecha Adquisición</th>
                                        <th>Categoria</th>
                                        <th>Tipo</th>
                                        <th>Marca</th>
                                        <th>Estado</th>
                                        <th>Opciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($activos as $activo)
                                    <tr>
                                        <td>{{$activo->nombre_activo}}</td>
                                        <td>{{$activo->numero_serie}}</td>
                                        <td>{{$activo->modelo}}</td>
                                        <td>{{$activo->fecha_adquisicion}}</td>
                                        @foreach($categorias as $categoria)
                                            @if($activo->categoria_id == $categoria->id)
                                            <td>{{$categoria->categoria}}</td>
                                            @endif
                                        @endforeach
                                        @foreach($tipos as $tipo)
                                            @if($activo->tipo_activo_id == $tipo->id)
                                                <td>{{$tipo->tipo}}</td>
                                            @endif
                                        @endforeach
                                        @foreach($marcas as $marca)
                                            @if($activo->marca_id == $marca->id)
                                                <td>{{$marca->marca}}</td>
                                            @endif
                                        @endforeach
                                        @foreach($estados as $estado)
                                            @if($activo->estado_id == $estado->id)
                                                <td>{{$estado->estado}}</td>
                                            @endif
                                        @endforeach
                                        <td>
                                            <form action="{{route('activo.destroy',$activo->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <div class="row g-3">
                                                    <a href="{{route('activo.show',$activo->id)}}"><img src="/show.gif" alt="" width="40"></a>
                                                    <a href="{{route('activo.edit',$activo->id)}}"><img src="/edit.gif" alt="" width="40"></a>
                                                    <button type="submit"><img src="/delete.gif" alt="" width="40"></button>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
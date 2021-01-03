<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado Tipo Activo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{route('tipo.create')}}" class="btn btn-primary mt-3 mb-3">Crear Tipo Activo</a>
                            <table-bordered>
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Tipo Activo</th>
                                        <th>Estado</th>
                                        <th>Fecha Creación</th>
                                        <th>Opciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($tipos as $tipo)
                                        <tr>
                                            <td>{{$tipo->tipo}}</td>
                                            @foreach($estados as $estado)
                                                @if($tipo->estado_id == $estado->id)
                                                    <td>{{$estado->estado}}</td>
                                                @endif
                                            @endforeach
                                            <td>{{$tipo->created_at}}</td>
                                            <td>
                                                <form action="{{route('tipo.destroy',$tipo->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{route('tipo.show',$tipo->id)}}" class="btn btn-info">Detalle</a>
                                                    <a href="{{route('tipo.edit',$tipo->id)}}" class="btn btn-warning">Editar</a>
                                                    <button class="btn btn-danger">Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </table-bordered>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

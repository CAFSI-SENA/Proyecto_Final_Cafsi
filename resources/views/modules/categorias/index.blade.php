<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de Categorias') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <a href="{{route('categoria.create')}}" class="btn btn-primary mb-3">Crear Categoría</a>
                            <table-responsive>
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Categoria</th>
                                        <th>Estado</th>
                                        <th>Fecha Creación</th>
                                        <th>Opciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categorias as $categoria)
                                        <tr>
                                            <td>{{$categoria->categoria}}</td>
                                            @foreach($estados as $estado)
                                                @if($categoria->estado_id == $estado->id)
                                                    <td>{{$estado->estado}}</td>
                                                @endif
                                            @endforeach
                                            <td>{{$categoria->created_at}}</td>
                                            <td>
                                                <a href="" class="btn btn-info">Detalle</a>
                                                <a href="" class="btn btn-warning">Editar</a>
                                                <a href="" class="btn btn-danger">Eliminar</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </table-responsive>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado Marcas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="contenedor">
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <a href="" class="btn btn-primary">Crear Marca</a>
                            <table-responsive>
                                <table class="table table-bordered mt-3">
                                    <thead>
                                    <tr>
                                        <th>Marca</th>
                                        <th>Estado</th>
                                        <th>Fecha Creación</th>
                                        <th>Opciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($marcas as $marca)
                                        <tr>{{$marca->marca}}</tr>
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

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de Funcionarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <a href="{{route('funcionario.create')}}" class="btn btn-primary mb-3">Crear Funcionario</a>
                            @if(session('message'))
                                <div class="alert alert-{{session('type')}} mt-2" role="alert">
                                    {{session('message')}}
                                </div>
                            @endif
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Tipo Identificacion</th>
                                        <th>Identificación</th>
                                        <th>Telefono</th>
                                        <th>Celular</th>
                                        <th>Genero</th>
                                        <th>Área</th>
                                        <th>Estado</th>
                                        <th>Opciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($funcionarios as $funcionario)

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

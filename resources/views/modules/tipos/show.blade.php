<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalle Tipo Activo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            @if(session('message'))
                                <div class="alert alert-{{session('type')}} mt-2" role="alert">
                                    {{session('message')}}
                                </div>
                            @endif
                            <table class="table">
                                <tbody>
                                <th>Tipo Activo</th>
                                <td>{{$tipos->tipo}}</td>
                                </tbody>
                                <tbody>
                                <th>Estado</th>
                                @foreach($estados as $estado)
                                    @if($tipos->estado_id == $estado->id)
                                        <td>{{$estado->estado}}</td>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                                <a href="{{route('tipo.index')}}" class="btn btn-default mb-3">Volver</a>
                                <a href="" class="btn btn-warning mb-3">Editar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

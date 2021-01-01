<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalle Marca') }}
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
                                <th>Marca</th>
                                <td>{{$marcas->marca}}</td>
                                </tbody>
                                <tbody>
                                <th>Estado</th>
                                @foreach($estados as $estado)
                                    @if($marcas->estado_id == $estado->id)
                                        <td>{{$estado->estado}}</td>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                            <a href="{{route('marca.index')}}" class="btn btn-default mb-3">Volver</a>
                            <a href="{{route('marca.edit',$marcas->id)}}" class="btn btn-warning mb-3">Editar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

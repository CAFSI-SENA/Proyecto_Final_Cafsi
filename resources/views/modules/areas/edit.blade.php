<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Actualizar Área') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <form action="{{route('area.update',$areas->id)}}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <table class="table">
                                                <tbody>
                                                <th>Área</th>
                                                <td><input type="text" name="area" class="form-control" value="{{$areas->area}}"></td>
                                                </tbody>
                                                <tbody>
                                                <th>Estado</th>
                                                <td>
                                                    <select name="" id="" class="form-control">
                                                        @foreach($estados as $estado)
                                                            <option value="{{$estado->id}}"
                                                                    @if($estado->id == $areas->estado_id)
                                                                    selected
                                                                @endif
                                                            >{{$estado->estado}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                </tbody>
                                            </table>
                                            <a href="{{route('area.index')}}" class="btn btn-light mb-2">Cancelar</a>
                                            <button type="submit" class="btn btn-primary mb-2">Guardar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

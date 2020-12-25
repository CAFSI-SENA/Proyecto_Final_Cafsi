<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 mt-3">
                            <form action="{{route('area.store')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="area">Área</label>
                                    <input type="text" class="form-control" name="area">
                                </div>
                                <div class="form-group">
                                    <label for="estado_id">Estado</label>
                                        <select class="form-control" name="estado_id" id="estado_id">
                                            <option selected disabled value="">Seleccione...</option>
                                            @foreach($estados as $estado)
                                                <option value="{{$estado->id}}">{{$estado->estado}}</option>
                                            @endforeach
                                        </select>
                                </div>
                                <a href="{{route('area.index')}}" class="btn btn-default">Cancelar</a>
                                <button class="btn btn-primary mt-3 mb-3">Guardar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

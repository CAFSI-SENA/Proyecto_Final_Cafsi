<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Marca') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <form action="{{route('marca.store')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="marca">Marca</label>
                                    <input type="text" class="form-control" name="marca">
                                </div>
                                <div class="form-group">
                                    <label for="estado_id">Estado</label>
                                    <select name="estado_id" id="estado_id" class="form-control">
                                        <option value="1">Activo</option>
                                    </select>
                                </div>
                                <br>
                                <a href="{{route('marca.index')}}" class="btn btn-default mb-3">Cancelar</a>
                                <button type="submit" class="btn btn-primary mb-3">Guardar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

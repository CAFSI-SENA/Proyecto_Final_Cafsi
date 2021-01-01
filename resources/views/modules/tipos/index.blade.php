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
                            <table-bordered>
                                <table>
                                    <thead>
                                    <tr>
                                        <th>Tipo Activo</th>
                                        <th>Estado</th>
                                        <th>Fecha Creación</th>
                                        <th>Opciones</th>
                                    </tr>
                                    </thead>
                                </table>
                            </table-bordered>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

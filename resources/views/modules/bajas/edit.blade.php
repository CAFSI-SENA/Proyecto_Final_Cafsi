@extends('layouts.admin.app')
@section('title','Editar Baja')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-4">
                <form action="{{route('baja.store')}}">
                    <table class="table">
                        <tbody>
                        <th>Fecha de Baja</th>
                        <td><input type="text" class="form-control" value="{{$bajas->fecha_baja}}"></td>
                        </tbody>
                        <tbody>
                        <th>Tipo de Baja</th>
                        <td>
                            <select name="tipo_baja_id" id="" class="form-select">
                                @foreach($tipos as $tipo)
                                    <option value="{{$tipo->tipo_baja_id}}"
                                    @if($bajas->tipo_baja_id == $tipo->id)
                                        selected
                                    @endif
                                    >{{$tipo->tipo}}</option>
                                @endforeach
                            </select>
                        </td>
                        </tbody>
                        <tbody>
                        <th>Serie</th>
                        <td></td>
                        </tbody>
                    </table>
                    <a href="{{route('baja.index')}}" class="btn btn-outline-dark">Cancelar</a>
                    <button type="submit" class="btn btn-outline-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.admin.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-3">
                <form action="{{route('marca.update',$marcas->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <table class="table">
                        <tbody>
                        <th>Marcas</th>
                        <td><input type="text" name="marca" class="form-control" value="{{$marcas->marca}}"></input></td>
                        </tbody>
                        <tbody>
                        <th>Estado</th>
                        <td>
                            <select name="estado_id" id="estado_id" class="form-control">
                                @foreach($estados as $estado)
                                    <option value="{{$estado->id}}"
                                            @if($marcas->estado_id == $estado->id)
                                            selected
                                        @endif
                                    >{{$estado->estado}}</option>
                                @endforeach
                            </select>
                        </td>
                        </tbody>
                    </table>
                    <a href="{{route('marca.index')}}" class="btn btn-default mb-3">Cancelar</a>
                    <button type="submit" class="btn btn-primary mb-3">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.admin.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">
                <form action="{{route('categoria.update',$categorias->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <table class="table">
                        <tbody>
                        <th>Categoría</th>
                        <td><input type="text" name="categoria" class="form-control" value="{{$categorias->categoria}}"></input></td>
                        </tbody>
                        <tbody>
                        <th>Estado</th>
                        <td>
                            <select name="estado_id" id="estado_id" class="form-control">
                                @foreach($estados as $estado)
                                    <option value="{{$estado->id}}"
                                            @if($categorias->estado_id == $estado->id)
                                            selected
                                        @endif
                                    >{{$estado->estado}}
                                    </option>
                                @endforeach
                            </select>
                        </td>
                        </tbody>
                    </table>
                    <a href="{{route('categoria.index')}}"class="btn btn-default mb-3">Cancelar</a>
                    <button type="submit" class="btn btn-primary mb-3">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@endsection

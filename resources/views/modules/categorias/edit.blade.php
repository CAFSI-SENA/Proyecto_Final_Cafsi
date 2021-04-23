@extends('layouts.admin.app')
@section('title','Editar Categoría')
@section('content')
    <div class="row">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Categoría</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Actualizar Categoría</a></li>
                    <li class="breadcrumb-item active">Administrador</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 offset-4">
            <form action="{{route('categoria.update',$categorias->id)}}" method="post">
                @csrf
                @method('PUT')
                <table class="table">
                    <tbody>
                    <th>Categoría</th>
                    <td><input type="text" name="categoria" class="form-control" value="{{$categorias->categoria}}"
                               style="text-transform:uppercase"
                               onkeyup="javascript:this.value=this.value.toUpperCase();" name="categoria"
                               maxlength="25"></input></td>
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
                <a href="{{route('categoria.index')}}" class="btn btn-default mb-3">Cancelar</a>
                <button type="submit" class="btn btn-primary mb-3">Guardar</button>
            </form>
        </div>
    </div>
@endsection

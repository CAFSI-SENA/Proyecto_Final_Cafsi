@extends('layouts.admin.app')
@section('title','Editar Tipo')
@section('content')
    <div class="row">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Tipos Activo</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Actualizar Tipo Activo</a></li>
                    <li class="breadcrumb-item active">Administrador</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 offset-4">
            <form action="{{route('tipo.update',$tipos->id)}}" method="post">
                @csrf
                @method('PUT')
                <table class="table">
                    <tbody>
                    <th>Tipo Activo</th>
                    <td><input type="text" name="tipo" class="form-control" value="{{$tipos->tipo}}"
                               style="text-transform:uppercase"
                               onkeyup="javascript:this.value=this.value.toUpperCase();" name="tipo"
                               maxlength="20"></input></td>
                    </tbody>
                    <tbody>
                    <th>Estado</th>
                    <td>
                        <select name="estado_id" id="estado_id" class="form-select">
                            @foreach($estados as $estado)
                                <option value="{{$estado->id}}"
                                        @if($tipos->estado_id == $estado->id)
                                        selected
                                    @endif
                                >{{$estado->estado}}</option>
                            @endforeach
                        </select>
                    </td>
                    </tbody>
                </table>
                <a href="{{route('tipo.index')}}" class="btn btn-default mb-3">Cancelar</a>
                <button type="submit" class="btn btn-primary mb-3">Guardar</button>
            </form>
        </div>
    </div>
@endsection

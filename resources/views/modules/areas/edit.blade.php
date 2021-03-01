@extends('layouts.admin.app')
@section('title','Editar Área')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-3">
                <form action="{{route('area.update',$areas->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <table class="table">
                        <tbody>
                        <th>Área</th>
                        <td><input type="text" name="area" class="form-control" value="{{$areas->area}}"
                                   style="text-transform:uppercase"
                                   onkeyup="javascript:this.value=this.value.toUpperCase();" name="area" maxlength="20"></td>
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
@endsection

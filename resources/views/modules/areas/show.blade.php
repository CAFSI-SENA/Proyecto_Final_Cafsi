@extends('layouts.admin.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">
                <table class="table">
                    <tbody>
                    <th>Área</th>
                    <td>{{$areas->area}}</td>
                    </tbody>
                    <tbody>
                    <th>Estado</th>
                    @foreach($estados as $estado)
                        @if($estado->id == $areas->estado_id)
                            <td>{{$estado->estado}}</td>
                        @endif
                    @endforeach
                    </tbody>
                </table>
                <a href="{{route('area.index')}}" class="btn btn-default mb-2">Volver</a>
                <a href="{{route('area.edit',$areas->id)}}" class="btn btn-warning mb-2">Editar</a>
            </div>
        </div>
    </div>
@endsection



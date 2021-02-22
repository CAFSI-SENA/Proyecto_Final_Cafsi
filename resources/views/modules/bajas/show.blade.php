@extends('layouts.admin.app')
@section('title','Detalle Bajas')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md 6">
                <table class="table">
                    <tbody>
                    <th>Fecha Baja</th>
                    <td>{{$bajas->fecha_baja}}</td>
                    
                    <th>Tipo de Baja</th>
                    <th>Serie Activo</th>
                    <th>Observación</th>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

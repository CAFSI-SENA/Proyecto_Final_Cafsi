@extends('layouts.admin.app')
@section('title','Editar Baja')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="">
                    <table class="table">
                        <tbody>
                        <th>Fecha de Baja</th>
                        <td><input type="text" class="form-control" value="{{$bajas->fecha_baja}}"></td>
                        </tbody>
                        <tbody>
                        <th>Tipo de Baja</th>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
@endsection

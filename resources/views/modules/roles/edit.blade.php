@extends('layouts.admin.app')
@section('title','Editar rol')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('rol.store')}}" method="post">
                @csrf
                <div class="col-md-6 offset-3 mt-2">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control " name="name" style="text-transform:uppercase"
                           onkeyup="javascript:this.value=this.value.toUpperCase();" name="name" maxlength="25">
                </div>
                <div class="col-md-6 offset-3 mt-2">
                    <label for="description">Descripción</label>
                    <input type="text" name="description" class="form-control">
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5>Asignación de permisos</h5>
                        @foreach($permissions as $permission)
                            <div class="col-12">
                                {!! Form::checkbox(
                                    "permission[{$permission->id}]",
                                    $permission->id,
                                    //['label' => $permission->name]
                                    null
                                    )
                                !!}
                                {{$permission->description}}
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="offset-3 mt-3">
                    <a href="{{route('rol.index')}}" class="btn btn-default mb-3">Cancelar</a>
                    <button type="submit" class="btn btn-primary mb-3">Guardar</button>
                </div>
            </form>
        </div>
    </div>
@endsection

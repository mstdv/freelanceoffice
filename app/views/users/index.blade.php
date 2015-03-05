@extends('body')
@section('titulo')
    Freelance Office - Gestion de usuarios
@stop

@section('contenido')
    <div class="row">

        <div class="col-lg-12">
            <h3>Listado de usuarios dentro del sistema</h3>
            <table class="table">
                <tr>
                    <td>N</td>
                    <td>Email</td>
                    <td>Nombre</td>
                    <td>Estado</td>
                    <td>Rol</td>
                    <td></td>
                </tr>

            @foreach($u = User::paginate(1) as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->real_name}}</td>
                    <td>
                        @if($user->status == 1)
                            <span class="text-success"><b>Activo</b></span>
                        @else
                            Inactivo
                        @endif
                    </td>
                    <td>
                        @if($user->rol == 1)
                            <span class="text-success"><b>Administrador</b></span>
                        @else
                            Cliente
                        @endif
                    </td>
                    <td>
                        {{Form::open(['method'=>'DELETE', 'url'=>'users/'.$user->id])}}
                            <button type="submit" class="btn btn-xs btn-red" style="float: left; margin-left: 5px;">Eliminar</button>
                        {{Form::close()}}
                        
                        {{Form::open(['method'=>'POST', 'url'=>'users/status/'.$user->id])}}
                            <button type="submit" class="btn btn-xs btn-orange" style="float: left; margin-left: 5px;">Cambiar estado</button>
                        {{Form::close()}}
                        
                        <a href="{{URL::to('/users/'.$user->id.'/edit')}}" class="btn btn-xs btn-orange" style="float: left; margin-left: 5px;">Editar</a>
                    </td>
                </tr>
            @endforeach

            </table>
        </div>

    </div>
@stop
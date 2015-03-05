@extends('body')
@section('titulo')
    Freelance Office - Login de usuarios
@stop

@section('contenido')
    <div class="row">
        <div class="col-lg-6">
		<div class="tile-stats tile-aqua">
			<div class="icon"><i class="entypo-suitcase"></i></div>
			<div class="num">Inicio de Sesion</div>
			<h3 style="margin-bottom: 15px;">Acceso para administrador y clientes.</h3>


			{{Form::open(['url'=>'/login', 'method'=>'post'])}}

				<div class="form-group">

					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-user"></i>
						</div>

						{{Form::text('email', Input::old('email'), ['class'=>'form-control', 'placeholder'=>'email@gmail.com'])}}
					</div>

				</div>

				<div class="form-group">

					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-key"></i>
						</div>

						{{Form::password('password', ['class'=>'form-control', 'placeholder'=>'Clave'])}}
					</div>

				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block btn-lg">
						<i class="entypo-login"></i>
						Iniciar Sesion
					</button>
				</div>
			{{Form::close()}}
		</div>
        @if ($errors->has())

          @foreach ($errors->all() as $error)
            <div class="alert alert-warning">{{ $error }}</div>
          @endforeach

        @endif
        @if(Session::get('msj') != null)
              <div class="alert alert-warning">{{Session::get('msj')}}</div>
        @endif

        </div>
        <div class="col-lg-3"></div>
    </div>
@stop
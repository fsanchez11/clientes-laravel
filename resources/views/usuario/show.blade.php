@extends('plantilla')
<!--user-->

@section('content')

<div class="panel-body">
	{!! Form::open(['route'=>['user.destroy', $users->id],
		'method'=> 'DELETE'])!!}

		<div class="form-group">
			<label form="exampleInputPassword1">
				<h3>Desea Eliminar Este Registro</h3>
			</label>
			<br>

			<div class="form-group">
					{!! Form::label('id', 'ID:') !!}
					<p>{!! $users->id !!}</p> 
 			</div>

			<div class="form-group">
					{!! Form::label('name', 'Nombre:') !!}
					<p>{!! $users->name !!}</p> 
 			</div>

 			<div class="form-group">
					{!! Form::label('email', 'Email:') !!}
					<p>{!! $users->email !!}</p> 
 			</div>

			<div class="form-group">
					{!! Form::label('password', 'Clave:') !!}
					<p>{!! $users->password !!}</p> 
 			</div>

		</div>

	{!! Form::submit('Aceptar', ['name' => 'guardar', 'id' => 'guardar',
	'content'=>'<span>Guardar</span>', 'class'=> 'btn btn-warning btn-sm m-t-10']) !!}

	<!--<button>
		Cancelar
	</button>-->

	<a href="{!! route('user.index') !!}" class="btn btn-default btn-sm m-t-10">Cancelar</a>

	<!-- tamaño de los botones
	class="btn btn-default btn-xs m-t-10 
	class="btn btn-default btn-sm m-t-10 
	class="btn btn-default btn-md m-t-10 -->

    {!! form::close()!!}
</div>

@endsection
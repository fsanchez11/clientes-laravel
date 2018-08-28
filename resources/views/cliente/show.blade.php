@extends('plantilla')
<!--client-->

@section('content')

<div class="panel-body">
	{!! Form::open(['route'=>['client.destroy', $clients->id],
		'method'=> 'DELETE'])!!}

		<div class="form-group">
			<label form="exampleInputPassword1">
				<h3>Desea Eliminar Este Registro</h3>
			</label>
			<br>

			<div class="form-group">
					{!! Form::label('id', 'ID:') !!}
					<p>{!! $clients->id !!}</p> 
 			</div>

			<div class="form-group">
					{!! Form::label('name', 'Nombre:') !!}
					<p>{!! $clients->name !!}</p> 
 			</div>

 			<div class="form-group">
					{!! Form::label('photo', 'Foto:') !!}
					<p>{!! $clients->photo !!}</p> 
 			</div>

			<div class="form-group">
					{!! Form::label('phone', 'Telefono:') !!}
					<p>{!! $clients->phone !!}</p> 
 			</div>

 			<div class="form-group">
					{!! Form::label('nacimiento', 'Nacimiento:') !!}
					<p>{!! $clients->nacimiento !!}</p> 
 			</div>

 			<div class="form-group">
					{!! Form::label('nac', 'Edad:') !!}
					<p>{!! $clients->nac !!}</p> 
 			</div>


		</div>

	{!! Form::submit('Aceptar', ['name' => 'guardar', 'id' => 'guardar',
	'content'=>'<span>Guardar</span>', 'class'=> 'btn btn-warning btn-sm m-t-10']) !!}

	<!--<button>
		Cancelar
	</button>-->

	<a href="{!! route('client.index') !!}" class="btn btn-default btn-sm m-t-10">Cancelar</a>

	<!-- tamaño de los botones
	class="btn btn-default btn-xs m-t-10 
	class="btn btn-default btn-sm m-t-10 
	class="btn btn-default btn-md m-t-10 -->

    {!! form::close()!!}
</div>

@endsection
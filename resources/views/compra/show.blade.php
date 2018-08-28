@extends('plantilla')
<!--compra-->

@section('content')

<div class="panel-body">
	{!! Form::open(['route'=>['compra.destroy', $compraas->id],
		'method'=> 'DELETE'])!!}

		<div class="form-group">
			<label form="exampleInputPassword1">
				<h3>Desea Eliminar Este Registro</h3>
			</label>
			<br>

			<div class="form-group">
					{!! Form::label('id', 'ID:') !!}
					<p>{!! $compraas->id !!}</p> 
 				</div>

			    <div class="form-group">
					{!! Form::label('name', 'Nombre:') !!}
					<p>{!! $compraas->name !!}</p> 
 				</div> 

 				<div class="form-group">
					{!! Form::label('cantidad', 'Cantidad:') !!}
					<p>{!! $compraas->cantidad !!}</p> 
 				</div> 

 				<div class="form-group">
					{!! Form::label('date_compra', 'Fecha de Compra:') !!}
					<p>{!! $compraas->date_compra !!}</p> 
 				</div> 

 				<div class="form-group">
					{!! Form::label('date_render', 'Fecha de Devolucion:') !!}
					<p>{!! $compraas->date_render !!}</p> 
 				</div>

 				<div class="form-group">
					{!! Form::label('dif', 'Numero de Dias') !!}
					<p>{!! $compraas->dif !!}</p> 
 				</div>

 				<div class="form-group">
					{!! Form::label('client_id', 'ID Cliente') !!}
					<p>{!! $compraas->client_id !!}</p> 
 				</div> 				
		</div>

	{!! Form::submit('Aceptar', ['name' => 'guardar', 'id' => 'guardar',
	'content'=>'<span>Guardar</span>', 'class'=> 'btn btn-warning btn-sm m-t-10']) !!}

	<!--<button>
		Cancelar
	</button>-->

	<a href="{!! route('compra.index') !!}" class="btn btn-default btn-sm m-t-10">Cancelar</a>

	<!-- tamaño de los botones
	class="btn btn-default btn-xs m-t-10 
	class="btn btn-default btn-sm m-t-10 
	class="btn btn-default btn-md m-t-10 -->

    {!! form::close()!!}
</div>

@endsection
@extends ('plantilla')
<!--compra-->

@section ('content')

<div class="content">
	<div class="box box-primary">
		<div class="box-body">
			<div class="row">

			<br>
				<h2>&nbsp Compras</h2>
			<br>

			@include('partials.messages')

				{!! Form::open(['route' => 'compra.store']) !!}

					<div class="form-group col-sm-6">
					{!! Form::label('name', 'Nombre') !!}
					{!! Form::text('name', null, ['class' =>'form-control']) !!}
					</div>

					<div class="form-group col-sm-6">
					{!! Form::label('cantidad', 'Cantidad') !!}
					{!! Form::text('cantidad', null, ['class' =>'form-control']) !!}
					</div>

					<div class="form-group col-sm-6">
					{!! Form::label('date_compra', 'Fecha de Compra') !!}
					{!! Form::date('date_compra', null, ['class' =>'form-control']) !!}
					</div>

					<div class="form-group col-sm-6">
					{!! Form::label('date_render', 'Fecha de Devolucion') !!}
					{!! Form::date('date_render', null, ['class' =>'form-control']) !!}
					</div>

					<div class="form-group col-sm-6">
					{!! Form::label('client_id', 'ID Cliente') !!}
         			{!! Form::select('client_id',$client_id, null, [
          			'id' => 'client_id',
         			'class'=>'form-control',
          			'placeholder'=>'Ingrese el tipo de cliente']) !!}
					</div>





					<div class="form-group col-sm-12">
					{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
					
					<a href="{!! route('compra.index') !!}" class="btn btn-default">Cancelar</a>
						
					</div>		

				{!! Form::close() !!}
				
			</div>
		</div>
	</div>
</div>

@stop
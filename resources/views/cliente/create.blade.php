@extends ('plantilla')
<!--cliente-->

@section ('content')

<div class="content">
	<div class="box box-primary">
		<div class="box-body">
			<div class="row">

			<br>
				<h2>&nbsp Clientes</h2>
			<br>

			@include('partials.messages')

				{!! Form::open(['route' => 'client.store', 'files' => true]) !!}

					<div class="form-group col-sm-6">
					{!! Form::label('name', 'Nombre') !!}
					{!! Form::text('name', null, ['class' =>'form-control']) !!}
					</div>

					<div class="form-group col-sm-6">
					{!! Form::label('phone', 'Telefono') !!}
					{!! Form::text('phone', null, ['class' =>'form-control']) !!}
					</div>

					<div class="form-group col-sm-6">
					{!! Form::label('nacimiento', 'Nacimiento') !!}
					{!! Form::date('nacimiento', null, ['class' =>'form-control']) !!}
					</div>

					<div class="form-group col-sm-6">
						{!! Form::label('photo', 'Foto') !!}
						{!! Form::file('photo')!!}
					</div>


					<div class="form-group col-sm-12">
					{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
					
					<a href="{!! route('client.index') !!}" class="btn btn-default">Cancelar</a>
						
					</div>		

				{!! Form::close() !!}
				
			</div>
		</div>
	</div>
</div>

@stop
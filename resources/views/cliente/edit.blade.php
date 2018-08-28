@extends ('plantilla')
<!--client-->

@section ('content')

<div class="content">
	<div class="box box-primary">
		<div class="box-body">
			<div class="row">

			<br>
				<h2>CLIENTES</h2>
			<br>

			@include('partials.messages')		

				{!! Form::model($clientss, ['route' => ['client.update', $clientss->id], 'method' =>'PUT']) !!}

					<div class="form-group col-sm-6">
					{!! Form::label('name', 'Nombre') !!}
					{!! Form::text('name', null, ['class' =>'form-control']) !!}
					</div>

					<div class="form-group col-sm-6">
					{!! Form::label('photo', 'Foto') !!}
					{!! Form::text('photo', null, ['class' =>'form-control']) !!}
					</div>

					<div class="form-group col-sm-6">
					{!! Form::label('phone', 'Telefono') !!}
					{!! Form::text('phone', null, ['class' =>'form-control']) !!}
					</div>

					<div class="form-group col-sm-6">
					{!! Form::label('nacimiento', 'Nacimiento') !!}
					{!! Form::text('nacimiento', null, ['class' =>'form-control']) !!}
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
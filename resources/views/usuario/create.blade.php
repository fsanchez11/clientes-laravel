@extends ('plantilla')
<!--user-->

@section ('content')

<div class="content">
	<div class="box box-primary">
		<div class="box-body">
			<div class="row">

			<br>
				<h2>&nbsp Usuarios</h2>
			<br>

			@include('partials.messages')

				{!! Form::open(['route' => 'user.store', 'files' => true]) !!}

					<div class="form-group col-sm-6">
					{!! Form::label('name', 'Nombre') !!}
					{!! Form::text('name', null, ['class' =>'form-control']) !!}
					</div>

					<div class="form-group col-sm-6">
					{!! Form::label('email', 'Email') !!}
					{!! Form::text('email', null, ['class' =>'form-control']) !!}
					</div>

					<div class="form-group col-sm-6">
					{!! Form::label('password', 'Clave') !!}
					{!! Form::text('password', null, ['class' =>'form-control']) !!}
					</div>


					<div class="form-group col-sm-12">
					{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
					
					<a href="{!! route('user.index') !!}" class="btn btn-default">Cancelar</a>
						
					</div>		

				{!! Form::close() !!}
				
			</div>
		</div>
	</div>
</div>

@stop
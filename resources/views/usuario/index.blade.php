@extends ('plantilla')
<!--usuario-->

<!--llamar los css, para habilitar los glyphicon-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

@section ('content')
<hr>
<div class="panel-heading" align="center">
	<h3 class="tit">USUARIOS</h3>
</div>

@include('partials.messages')


	<!--Boton-->
	<section class="content-header">
	<h1 class="pull-left">Inicio</h1>
	<h1 class="pull-right">
		<a class="btn btn-primary pull-right" style="margin-top: -10px; margin-bottom: 5px" href="{!!route('user.create')!!}">Adicionar</a>
	</h1>	
	</section>


	<!--Btn pdf

	<br><br>
	<h1 class="pull-right">
	<tr>
		<a href="#" class="btn btn-info" role="button">Ver Todo</a>

		<a href="#" class="btn btn-info" role="button">Descargar</a>
	</tr>
	</h1>   -->

<br><br>
<div class="content">
	<div class="clearfix"></div>

	<div class="clearfix"></div>
	<div class="box box-primary">
		<div class="box-body">
			
			<table class="table table-responsive">
			<thead>
				
				<th>ID</th>
				<th>Nombre</th>
				<th>Email</th>
				<th>Clave</th>

				<th colspan="3">Action</th>

			</thead> 

			<tbody>
				@foreach($users as $User)
				<tr>
					
					<td>{{$User-> id}} </td>
					<td>{{$User-> name}} </td>					
					<td>{{$User-> email}} </td>
					<td>{{$User-> password}} </td>
						
					<td>
					<a href="{{route('user.edit' ,$User->id)}}" class="btn btn-link"><i class="glyphicon glyphicon-edit" ></i></a>
					
					<a href="{{route('user.show' ,$User->id)}}" class="btn btn-link"><i class="glyphicon glyphicon-trash" ></i></a>

					</td>			


				</tr>	
					   
				</tr>			

				@endforeach

				
			</tbody>			

			</table>

			<!--paginacion-->

			<div class="text-center">
				{!!$users->links()!!}
			</div>

		</div>
	</div>
</div>

<br>


@stop
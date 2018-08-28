@extends ('plantilla')
<!--client-->

<!--llamar los css, para habilitar los glyphicon-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

@section ('content')
<hr>
<div class="panel-heading" align="center">
	<h3 class="tit">CLIENTES</h3>
</div>

@include('partials.messages')


<!--permiso acceder, MIDDLEWARE en la vista-->
@if (Auth::User()->email == 'fdejesussanchez@uniguajira.edu.co')


	<!--Boton-->
	<section class="content-header">
	<h1 class="pull-left">Inicio</h1>
	<h1 class="pull-right">
		<a class="btn btn-primary pull-right" style="margin-top: -10px; margin-bottom: 5px" href="{!!route('client.create')!!}">Adicionar</a>
	</h1>	
	</section>


	<!--Btn pdf-->

	<br><br>
	<h1 class="pull-right">
	<tr>
		<a href="{!!route('ver_cliente')!!}" class="btn btn-info" role="button">Ver Todo</a>

		<a href="{!!route('descargar_cliente')!!}" class="btn btn-info" role="button">Descargar</a>
	</tr>
	</h1>

@endif


@if (Auth::User()->email != 'fdejesussanchez@uniguajira.edu.co')
	<div align="right">
	<div class="infor">
	<h4><b><i>No tiene privilegios &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</i></b></h4>
	<h4><i>Para acceder a esta informacion</i></h4>
	</div>
	</div>
@endif

<!--para acomodar los textos tambien se puede utilizar la etiqueta <pre></pre>  -->


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
				<th>Foto</th>
				<th>Telefono</th>
				<th>Nacimiento</th>
				<th>Edad</th>

				<th colspan="3">Action</th>

			</thead> 

			<tbody>
				@foreach($clients as $Client)
				<tr>
					
					<td>{{$Client-> id}} </td>
					<td>{{$Client-> name}} </td>

					<td><img src="/images/{{ $Client->photo}}"
					class="img-thumbnail" width="90" heigh="85" > 
					</td>
					
					<td>{{$Client-> phone}} </td>
					<td>{{$Client-> nacimiento}} </td>
					<td>{{$Client-> nac}} </td>
						
					<td>
					<a href="{{route('client.edit' ,$Client->id)}}" class="btn btn-link"><i class="glyphicon glyphicon-edit" ></i></a>
					
					<a href="{{route('client.show' ,$Client->id)}}" class="btn btn-link"><i class="glyphicon glyphicon-trash" ></i></a>

					<a href="{{route('ver_client_id' ,$Client->id)}}" class="btn btn-link"><i class="glyphicon glyphicon-search" ></i></a>

					<a href="{{route('descargar_client_id' ,$Client->id)}}" class="btn btn-link"><i class="glyphicon glyphicon-download" ></i></a>
					
					</td>			


				</tr>	
					   
				</tr>			

				@endforeach

				
			</tbody>			

			</table>

			<!--paginacion-->

			<div class="text-center">
				{!!$clients->links()!!}
			</div>

		</div>
	</div>
</div>

<br>


@stop
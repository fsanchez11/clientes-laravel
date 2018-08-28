@extends ('plantilla')
<!--compra-->

<!--llamar los css, para habilitar los glyphicon-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

@section ('content')
<hr>
<div class="panel-heading" align="center">
	<h3 class="tit">COMPRA</h3>
</div>

@include('partials.messages')

<!--Boton Adicionar-->
<section class="content-header">
<h1 class="pull-left">Inicio</h1>
<h1 class="pull-right">
	<a class="btn btn-primary pull-right" style="margin-top: -10px; margin-bottom: 5px" href="{!!route('compra.create')!!}">Adicionar</a>
</h1>	
</section>


<!--Btn pdf-->

<br><br>
<h1 class="pull-right">
<tr>
<a href="{!!route('ver_compra')!!}" class="btn btn-info" role="button">Ver Todo</a>

<a href="{!!route('descargar_compra')!!}" class="btn btn-info" role="button">Descargar</a>
</tr>
</h1>


<!--Btn consultas-->
<br><br><br>
<h1 class="pull-left">

<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle"
          data-toggle="dropdown">
    Consultas <span class="caret"></span>
  </button>
 
  <ul class="dropdown-menu" role="menu">
    <li><a href="{!!route('consulta1')!!}">Contar</a></li>
    <li><a href="{!!route('consulta2')!!}">Entre 1-100</a></li>
    <li><a href="{!!route('consulta3')!!}">Buscar nombre</a></li>
    <li><a href="{!!route('consulta4')!!}">Buscar el id</a></li>
    <li><a href="{!!route('consulta5')!!}">Mostrar solo nombre</a></li>
    <li><a href="{!!route('consulta6')!!}">Mostrar todos nombres</a></li>
    <li class="divider"></li>
    <li><a href="{!!route('consulta7')!!}">Sumatoria</a></li>
    <li><a href="{!!route('consulta8')!!}">Promedio</a></li>
    <li><a href="{!!route('consulta9')!!}">Maximo</a></li>
  </ul>
</div>

</h1>



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
				<th>Cantidad</th>
				<th>Fecha de Compra</th>
				<th>Fecha de Devolucion</th>
				<th>Numero de Dias</th>
				<th>ID Cliente</th>

				<th colspan="3">Action</th>

			</thead> 

			<tbody>
				@foreach($compraas as $Compra)
				<tr>
					
					<td>{{$Compra-> id}} </td>
					<td>{{$Compra-> name}} </td>
					<td>{{$Compra-> cantidad}} </td>
					<td>{{$Compra-> date_compra}} </td>
					<td>{{$Compra-> date_render}} </td>
					<td>{{$Compra-> dif}} </td>
					<td>{{$Compra-> Client}} </td>
						
					<td>
					<a href="{{route('compra.edit' ,$Compra->id)}}" class="btn btn-link"><i class="glyphicon glyphicon-edit" ></i></a>
					
					<a href="{{route('compra.show' ,$Compra->id)}}" class="btn btn-link"><i class="glyphicon glyphicon-trash" ></i></a>

					<a href="{{route('ver_compra_id' ,$Compra->id)}}" class="btn btn-link"><i class="glyphicon glyphicon-search" ></i></a>

					<a href="{{route('descargar_compra_id' ,$Compra->id)}}" class="btn btn-link"><i class="glyphicon glyphicon-download" ></i></a>
					
					</td>			

				</tr>	
					   
				</tr>			

				@endforeach

				
			</tbody>			

			</table>

			<!--paginacion-->

			<div class="text-center">
				{!!$compraas->links()!!}
			</div>

		</div>
	</div>
</div>

<br>


@stop
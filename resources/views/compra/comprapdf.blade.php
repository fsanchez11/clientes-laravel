<link rel="stylesheet" type="text/css" href="css/estilos.css">

<div class="franja"></div>

<div class="posicion"><img src="images/logo.jpg" width="40px" height="40px"></div>

<div class="tex">
<p>VideoStore</p>
<p>Ing. Sanchez L.</p>
</div>

<br>
<div align="center"  class="letra">
	<h3 >REPORTE DE COMPRAS</h3>
</div>
<hr>

<div class="agua"><img src="images/fondo3.jpg" width="725px" height="800px"></div>

<br>			
			<table>
			<thead>
				<tr>				
				<th>ID</th>
				<th>Nombre</th>
				<th>Cantidad</th>
				<th>Fecha de Compra</th>
				<th>Fecha de Devolucion</th>
				<th>Numero de Dias</th>
				
				</tr>
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

				</tr>	
					   
				</tr>			

				@endforeach

				
			</tbody>			

			</table>

		</body>



			


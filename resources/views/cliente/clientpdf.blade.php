<link rel="stylesheet" type="text/css" href="css/estilos.css">

<div class="franja"></div>

<div class="posicion"><img src="images/logo.jpg" width="40px" height="40px"></div>

<div class="tex">
<p>VideoStore</p>
<p>Ing. Sanchez L.</p>
</div>

<br>
<div align="center"  class="letra">
	<h3 >REPORTE DE CLIENTES</h3>
</div>
<hr>

<div class="agua"><img src="images/fondo3.jpg" width="725px" height="800px"></div>

<br>			
			<table>
			<thead>
				<tr>				
				<th>ID</th>
				<th>Nombre</th>
				<th>Foto</th>
				<th>Telefono</th>
				<th>Nacimiento</th>
				<th>Edad</th>
				</tr>
			</thead>  

			<tbody>
				@foreach($clients as $Client)
				<tr>					
					<td>{{$Client-> id}} </td>
					<td>{{$Client-> name}} </td>
					<td>{{$Client-> photo}} </td>
					<td>{{$Client-> phone}} </td>
					<td>{{$Client-> nacimiento}} </td>	
					<td>{{$Client-> nac}} </td>				

				</tr>	
					   
				</tr>			

				@endforeach

				
			</tbody>			

			</table>

		</body>



			


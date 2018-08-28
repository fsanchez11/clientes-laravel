@if(count($errors)>0)
<div class="alert alert-danger" role="alert">

	<ul>
	@foreach($errors->all() as $error)
	<li>{{ $error }} </li>
	@endforeach	
	</ul>
</div>

@endif


@if(Session::has('save'))
        <div class="alert alert-info">
            <a class="close" data-dismiss="alert">×</a>
            <strong>Guardado!</strong> {!!Session::get('save')!!}
        </div>
@endif


@if(Session::has('delete'))
        <div class="alert alert-info">
            <a class="close" data-dismiss="alert">×</a>
            <strong>Eliminado!</strong> {!!Session::get('delete')!!}
        </div>
@endif


@if(Session::has('update'))
        <div class="alert alert-info">
            <a class="close" data-dismiss="alert">×</a>
            <strong>Actualizado!</strong> {!!Session::get('update')!!}
        </div>
@endif

@if(Session::has('message-error'))
        <div class="alert alert-info">
            <a class="close" data-dismiss="alert">×</a>
            <strong>Sin privilegios!</strong> {!!Session::get('message-error')!!}
        </div>
@endif

@if(Session::has('message-consulta'))
        <div class="alert alert-info">
            <a class="close" data-dismiss="alert">×</a>
            <strong>Consulta: </strong> {!!Session::get('message-consulta')!!}
        </div>
@endif
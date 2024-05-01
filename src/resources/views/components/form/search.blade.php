{{ Form::open(['route' => $route, 'method' => 'GET', 'class' => 'pull-right']) }}
	
	{{ Form::search($name, null, ['class' => 'form-control input-sm', 'placeholder' => 'Buscador...']) }}

{{ Form::close() }}
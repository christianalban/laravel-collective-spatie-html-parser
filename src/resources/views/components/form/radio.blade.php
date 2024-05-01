<div class="form-group">	
    {{ Form::label($name, $label, ['class' => 'control-label']) }}
	<br>
	@foreach($items as $key => $value)

		<label>
			{{ Form::radio($name, $key) }}
			{{ $value }} &nbsp;	
		</label>
		
	@endforeach
</div>
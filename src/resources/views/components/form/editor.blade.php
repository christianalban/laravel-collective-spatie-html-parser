<div class="form-group">
    {{ Form::label($name, $label, ['class' => 'control-label']) }}
    {{ Form::textarea($name, null) }}
</div>

@section('javascript')
	<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
	<script type="text/javascript">

		CKEDITOR.config.height = 100;
		CKEDITOR.config.width  = 'auto';

		CKEDITOR.replace('{{ $name }}');
	</script>
@endsection

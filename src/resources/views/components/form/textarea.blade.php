<div class="form-group">
    {{ Form::label($name, $label, ['class' => 'control-label']) }}
    {{ Form::textarea($name, null, array_merge(['class' => 'form-control'], $attributes)) }}
</div>
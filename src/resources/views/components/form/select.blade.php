<div class="form-group">
    {{ Form::label($name, $label, ['class' => 'control-label']) }}
    {{ Form::select($name, $items, null, array_merge(['class' => 'form-control'], $attributes)) }}
</div>
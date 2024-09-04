@props([
'label' => false, 'name', 'value', 'category_name', 'parent'
])

@if ($label)
<label for="">{{$label}}</label>
@endif

<select name="{{$name}}" id="" {{$attributes->class([
    'form-check-input',
    'is-invalid' => $errors->has($name),
    ])}}
    >
    <option value="">Primary Category</option>
    @foreach ($parent as $parent)
    <option value="{{$value}}" @selected(old($name, $selected)==$value)>{{$category_name }}</option>
    @endforeach
</select>
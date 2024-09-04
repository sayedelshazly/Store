@props([
    'name', 'value', 'options', 'checked' => false, 'label' => false,
])

@if ($label)
<label for="">{{$label}}</label>
@endif

<select name="{{$name}}" id="" class="form-control form-select">
    <option value="">Primary Category</option>
    @foreach ($parent as $parent)
        <option value="{{$parent->id}}" @selected(old('parent_id', $category->parent_id) == $parent->id)>{{$parent->name }}</option>
    @endforeach

    @foreach ($options as $value => $text )
    <div class="form-check">
        <input type="radio" name="{{$name}}" value="{{$value}}" 
        @checked(old($name, $checked) == $value)
        {{$attributes->class([  
            'form-check-input',
            'is-invalid' => $errors->has($name),
        ])}}
    >
        <label class="form-check-label">
            {{$text}}
        </label>
    </div>
@endforeach
</select>
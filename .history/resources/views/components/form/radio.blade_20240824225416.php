@props([
    'name', 'value', 'options',
])

@foreach ($options as $value => $text )
<div class="form-check">
    <input class="form-check-input" type="radio" name="{{$name}}" value="{{$value}}" 
    @checked(old('status', $category->status)  == 'active')
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
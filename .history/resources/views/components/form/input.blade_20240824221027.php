@props([
    'name', 'type' => 'text', 'value' => '', 'label' => false,
    'name', 'type' => 'text', 'value' => '', 'label' => false,
])


<label for="">{{$label}}</label>

<input 
type="{{$type}}" 
name="{{$name}}" 
value="{{old($name, $value)}}" 
{{-- @class([
    'form-control',
    'is-invalid' => $errors->has($name)
])> --}}
{{-- print all variable not exist in the props and also it's object from class has methods like (class() ) --}}
{{$attributes->class([  
    'form-control',
    'is-invalid' => $errors->has($name),
])}}
>
{{-- <input type="text" name="{{$name}}" value="{{old($name) ?? $value}}" class="form-control @error('{{$name}}') is-invalid @enderror"> --}}
@error($name)
    <div class="invalid-feedback">{{ $message }}</div>
@enderror

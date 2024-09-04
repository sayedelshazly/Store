@props([
    'name', 'value' => '', 'label' => false,
])

if
<label for="">{{$label}}</label>

<textarea 
name="{{$name}}" 
{{-- @class([
    'form-control',
    'is-invalid' => $errors->has($name)
])> --}}
{{-- print all variable not exist in the props and also it's object from class has methods like (class() ) --}}
{{$attributes->class([  
    'form-control',
    'is-invalid' => $errors->has($name),
])}}
>{{old($name, $value)}}</textarea>
{{-- <input type="text" name="{{$name}}" value="{{old($name) ?? $value}}" class="form-control @error('{{$name}}') is-invalid @enderror"> --}}
@error($name)
    <div class="invalid-feedback">{{ $message }}</div>
@enderror

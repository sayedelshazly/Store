@props([
    'name', 'type' => 'text', 'value' => ''
])

<input 
type="{{$type}}" 
name="{{$name}}" 
value="{{old($name, $value)}}" 
{{$attributes->class([  
    'form-control',
    'is-invalid' => $errors->has($name)
])}}
{{-- <input type="text" name="{{$name}}" value="{{old($name) ?? $value}}" class="form-control @error('{{$name}}') is-invalid @enderror"> --}}
@error($name)
    <div class="invalid-feedback">{{ $message }}</div>
@enderror

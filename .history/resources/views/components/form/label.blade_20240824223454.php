@props([
    'id' => '',
])
{{-- if we need to add content in the component we use special variable  --}}
<label for="{{$id}}">{{$slot}}</label>


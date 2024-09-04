@props([
    'id' => '',
])
{{-- if we need to add content in the component we use special varia --}}
<label for="{{$id}}">{{$slot}}</label>


@props([
    'id' => '',
])
{{-- if we need to add content in the  --}}
<label for="{{$id}}">{{$slot}}</label>


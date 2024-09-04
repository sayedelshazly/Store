@props([
    'id' => '',
])
{{-- if we need to add content in the cop --}}
<label for="{{$id}}">{{$slot}}</label>


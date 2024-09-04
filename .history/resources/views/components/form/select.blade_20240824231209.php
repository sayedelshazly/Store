@props([
    'label' => false, 'name', 'value', 
])

@if ($label)
<label for="">{{$label}}</label>
@endif

<select name="{{$name}}" id="" class="form-control form-select">
    <option value="">Primary Category</option>
    @foreach ($parent as $parent)
    <option value="{{$value}}" @selected(old($name, $selected == $parent->id)>{{$parent->name }}</option>
    @endforeach
</select>
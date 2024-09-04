@props([
    'label' => false, 'name', 'value', 'category_name', 'parent'
])

@if ($label)
<label for="">{{$label}}</label>
@endif

<select name="{{$name}}" id="" 
class="form-control form-select">
    <option value="">Primary Category</option>
    @foreach ($parent as $parent)
    <option value="{{$value}}" @selected(old($name, $selected) == $value)>{{$category_name }}</option>
    @endforeach
</select>
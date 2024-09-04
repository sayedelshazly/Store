@props([
    'label' => false, 'name' 
])

@if ($label)
<label for="">{{$label}}</label>
@endif

<select name="{{$name}}" id="" class="form-control form-select">
    <option value="">Primary Category</option>
    @foreach ($parent as $parent)
    <option value="{{$parent->id}}" @selected(old('parent_id', $category->parent_id) == $parent->id)>{{$parent->name }}</option>
    @endforeach
</select>
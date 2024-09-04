@props([
    'name' => 'parent_id',
    'parent' => [],
    'selected' => null,
    'label' => 'Primary Category',
])


@if ($label)
<label for="">{{$label}}</label>
@endif


<select name="{{ $name }}" id="{{ $name }}" class="form-control form-select">
    <option value="">{{ $label }}</option>
    @foreach ($parent as $item)
        <option value="{{ $item->id }}" @selected(old($name, $selected) == $item->id)>{{ $item->name }}</option>
    @endforeach
</select>
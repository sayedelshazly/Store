@props([
    'label' => false,
    'name',
    'value' => '',
    'category_name' => '',
    'parent' => [],
    'selected' => null,
])

@if ($label)
    <label for="{{ $name }}">{{ $label }}</label>
@endif

<select name="{{ $name }}" id="{{ $name }}" 
    {{ $attributes->class([
        'form-select',
        'is-invalid' => $errors->has($name),
    ]) }}>
    <option value="">Primary Category</option>
    @foreach ($parent as $item)
        <option value="{{ $item->$value }}" @selected(old($name, $selected) == $item->$value)>
            {{ $item->$category_name }}
        </option>
    @endforeach
</select>

@props([
    'name', 'value'
])

@foreach ($options as $value => $text )
<div class="form-check">
    <input class="form-check-input" type="radio" name="{{$name}}" value="{{$value}}" 
    @checked(old('status', $category->status)  == 'active')>
    <label class="form-check-label">
        Active
    </label>
</div>
@endforeach
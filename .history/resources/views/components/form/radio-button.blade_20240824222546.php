@props([
    'label' => false,
])

@if ($label)
<label for="">{{$label}}</label>
@endif

<div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="status" value="active" @checked(old('status', $category->status)  ==
        'active')>
        <label class="form-check-label">
            Active
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="status" value="archived" @checked(old('status', $category->status) ==
        'archived')>
        <label class="form-check-label">
            Archive
        </label>
    </div>
</div>

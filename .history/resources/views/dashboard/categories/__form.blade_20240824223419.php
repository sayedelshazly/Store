@if ($errors->any())
    <div class="alert alert-danger">
        <h3>Errors Occurred!</h3>
        <ul>
            @foreach ($errors->all() as $err)
            <li>{{$err}}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="class-group">
    {{-- <x-form.input name="name" type="text" value="{{$category->name}}" /> --}}
    <x-form.input label="Category Name" class="" name="name" type="text" :value="$category->name" /> {{-- :value (for expression or variable or function) --}}
</div>
<div class="form-group">
    <label for="">Category Parent</label>
    <select name="parent_id" id="" class="form-control form-select">
        <option value="">Primary Category</option>
        @foreach ($parent as $parent)
        <option value="{{$parent->id}}" @selected(old('parent_id', $category->parent_id) == $parent->id)>{{$parent->name }}</option>
        @endforeach
    </select>
</div>
<div class="class-group">
    <x-form.textarea label="Description" name="description" :value="$category->description" />
    {{-- <textarea name="description" class="form-control"> {{old('description') ?? $category->description}} </textarea> --}}
</div>
<div class="class-group">
    <label for="">Status</label>
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
</div>
<div class="class-group">
 --}}
    <x-form.label type="file" name="image">Image</x-form.label>
    <x-form.input type="file" name="image" />
    @if ($category->image)
    <td><img src="{{asset('storage/' . $category->image)}}" style="width: 90px; margin-top:10px" alt=""></td>   
    @endif
</div>
<div class="class-group mt-2">
    <button class="btn btn-primary">{{$button_label ?? 'Update'}}</button>
</div>
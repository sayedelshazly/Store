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
    <x-form.r
</div>
<div class="class-group">
    <x-form.textarea label="Description" name="description" :value="$category->description" />
    {{-- <textarea name="description" class="form-control"> {{old('description') ?? $category->description}} </textarea> --}}
</div>
<div class="class-group">
    <div>
        <x-form.radio label="Status" name="status" :checked="$category->status" :options="['active' => 'Active', 'archived' => 'Archived']" />
    </div>
</div>
<div class="class-group">
    {{-- <x-form.label>Image</x-form.label> --}} {{-- if we need to use [$slot] --}}
    <x-form.input label="Image" type="file" name="image" />
    @if ($category->image)
    <td><img src="{{asset('storage/' . $category->image)}}" style="width: 90px; margin-top:10px" alt=""></td>   
    @endif
</div>
<div class="class-group mt-2">
    <button class="btn btn-primary">{{$button_label ?? 'Update'}}</button>
</div>
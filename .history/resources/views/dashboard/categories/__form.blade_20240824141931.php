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
    <label for="">Category Name</label>
    <input type="text" name="name" value="{{old('name', $category->name)}}" class="form-control @error('name') is-invalid @enderror">
    {{-- <input type="text" name="name" value="{{old('name') ?? $category->name}}" class="form-control @error('name') is-invalid @enderror"> --}}
    @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="">Category Parent</label>
    <select name="parent_id" id="" class="form-control form-select @error('parent_id') is-invalid @enderror">
        <option value="">Primary Category</option>
        @foreach ($parent as $parent)
        <option value="{{$parent->id}}" @selected(old('parent_id', $category->parent_id) == $parent->id)>{{$parent->name }}</option>
        @endforeach
    </select>
</div>
<div class="class-group">
    <label for="">Description</label>
    <textarea name="description" class="form-control @error('description') is-invalid @enderror"> {{old('description', $category->description)}} </textarea>
    {{-- <textarea name="description" class="form-control"> {{old('description') ?? $category->description}} </textarea> --}}
</div>
<div class="class-group">
    <label for="">Status</label>
    <div>
        <div class="form-check">
            <input class="form-check-input @error('status') is-invalid @enderror" type="radio" name="status" value="active" @checked(old('status', $category->status)  ==
            'active')>
            <label class="form-check-label">
                Active
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input @error('status') is-invalid @enderror" type="radio" name="status" value="archived" @checked(old('status', $category->status) ==
            'archived')>
            <label class="form-check-label">
                Archive
            </label>
        </div>
    </div>
</div>
<div class="class-group">
    <label for="">Image</label>
    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
    @if ($category->image)
    <td><img src="{{asset('storage/' . $category->image)}}" style="width: 90px; margin-top:10px" alt=""></td>   
    @endif
</div>
<div class="class-group mt-2">
    <button class="btn btn-primary">{{$button_label ?? 'Update'}}</button>
</div>
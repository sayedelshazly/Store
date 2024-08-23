<div class="class-group">
    <label for="">Category Name</label>
    <input type="text" name="name" value="{{$category->name ?? }}" class="form-control">
</div>
<div class="form-group">
    <label for="">Category Parent</label>
    <select name="parent_id" id="" class="form-control form-select">
        <option value="">Primary Category</option>
        @foreach ($parent as $parent)
        <option value="{{$parent->id}}" @selected($category->parent_id == $parent->id)>{{$parent->name }}</option>
        @endforeach
    </select>
</div>
<div class="class-group">
    <label for="">Description</label>
    <textarea name="description" class="form-control"> {{$category->description}} </textarea>
</div>
<div class="class-group">
    <label for="">Status</label>
    <div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="status" value="active" @checked($category->status == 'active')>
            <label class="form-check-label">
                Active
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="status" value="archived" @checked($category->status == 'archived')>
            <label class="form-check-label">
                Archive
            </label>
        </div>
    </div>
</div>
<div class="class-group">
    <label for="">Image</label>
    <input type="file" name="image" class="form-control">
</div>
<div class="class-group mt-2">
    <button class="btn btn-primary">update</button>
</div>
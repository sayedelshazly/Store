@extends('layouts.dashboard')
@section('title', 'Create Categories')


@section('breadcrumb')
{{-- @parent (we use this for inheritance that we show the parent then show the chields ) --}}
@parent
<li class="breadcrumb-item active">Create Categories</li>
@endsection

@section('content')

<form action="{{route('categories.store')}}" method="post">
    @csrf
    <div class="class-group">
        <label for="">Category Name</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Category Parent</label>
        <select name="parent_id" id="" class="form-control form-select">
            <option value="">Primary Category</option>
            @foreach ($parent as $parent)
                <option value="{{$parent->id}}">{{$parent->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="class-group">
        <label for="">Description</label>
        <textarea name="description" class="form-control">
    </div>
    <div class="class-group">
        <label for="">Category Name</label>
        <input type="text" name="name" class="form-control">
    </div>

</form>



@endsection
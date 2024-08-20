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
    <div class="class-group">
        <label for="">Category Parent</label>
        <select name="" id=""></select>
    </div>

</form>



@endsection
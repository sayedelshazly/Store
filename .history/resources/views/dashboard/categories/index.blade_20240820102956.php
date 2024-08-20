@extends('layouts.dashboard')
@section('title', 'Categories')


@section('breadcrumb')
{{-- @parent (we use this for inheritance that we show the parent then show the chields )    --}}
@parent
<li class="breadcrumb-item active">Categories</li>
@endsection

@section('content')


<table class="table">
    <thead>
        <tr>
            <th></th>
            <th>ID</th>
            <th>Name</th>
            <th>Parent</th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td>{{$category->parent_id}}</td>
            <td>{{$category->created_at}}</td>
            <td>
                <a href="#">Edit</a>

                <form action="" method="post"></form>
                <a href="#">Delete</a>
            </td>
        </tr>
    </tbody>
</table>


@endsection
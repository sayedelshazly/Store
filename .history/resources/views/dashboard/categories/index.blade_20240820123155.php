@extends('layouts.dashboard')
@section('title', 'Categories')


@section('breadcrumb')
{{-- @parent (we use this for inheritance that we show the parent then show the chields ) --}}
@parent
<li class="breadcrumb-item active">Categories</li>
@endsection

@section('content')

<a href="{{route('categories.create')}}" class="btn btn-sm btn-outline-primary">Create</a href="{{route('categories.create')}}">

<table class="table mt-5">
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
        {{-- @if ($category) // this variable is object and the object is true --}}
        {{-- @if ($category->count())  --}}

        {{-- @foreach ($category as $category) --}}
        @forelse ($category as $category)
            
        <tr>
            <td></td>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td>{{$category->parent_id}}</td>
            <td>{{$category->created_at}}</td>
            <td>
                <a href="{{route('categories.edit', $category->id)}}">Edit</a>

                <form action="{{route('categories.destroy', )}}" method="post">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                </form>
                <a href="#">Delete</a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="7">No Categories Defined!</td>
        </tr>
        @endforelse
    </tbody>
</table>


@endsection
@extends('layouts.dashboard')
@section('title', 'Categories')


@section('breadcrumb')
{{-- @parent (we use this for inheritance that we show the parent then show the chields ) --}}
@parent
<li class="breadcrumb-item active">Categories</li>
@endsection

@section('content')

<a href="{{route('dashboard.categories.create')}}" class="btn btn-sm btn-outline-primary mx-3">Create</a>

<table class="table mt-5">
    {{-- alert component --}}
    <x-alert />

    <thead>
        <tr>
            <th>Images</th>
            <th>ID</th>
            <th>Name</th>
            <th>Parent</th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        {{-- @if ($category) // this variable is object and the object is true --}}
        {{-- @if ($category->count()) --}}
        {{-- @foreach ($category as $category) --}}
        @forelse ($category as $cat) {{-- equal [if, foreach] --}}
        <tr>
            <td><img src="{{asset('storage/' . $cat->image)}}" style="width: 50px; hight:50px;" alt=""></td>
            <td>{{$cat->id}}</td>
            <td>{{$cat->name}}</td>
            <td>{{$cat->parent_id}}</td>
            <td>{{$cat->created_at}}</td>
            <td class=" d-flex justify-content-start align-items-center">
                <a href="{{route('dashboard.categories.edit', $cat->id)}}">Edit</a>
                <form action="{{route('dashboard.categories.destroy', $cat->id)}}" method="post" class="mx-2">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                </form>
                {{-- <a href="#">Delete</a> --}}
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="7">No Categories Defined!</td>
        </tr>
        @endforelse
    </tbody>
</table>

{{ $category->links() }}

@endsection
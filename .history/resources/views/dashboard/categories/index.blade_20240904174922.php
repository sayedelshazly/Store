@extends('layouts.dashboard')
@section('title', 'Categories')


@section('breadcrumb')
{{-- @parent (we use this for inheritance that we show the parent then show the chields ) --}}
@parent
<li class="breadcrumb-item active">Categories</li>
@endsection

@section('content')

<a href="{{route('dashboard.categories.create')}}" class="btn btn-sm btn-outline-primary mx-2">Create</a>
{{-- alert component --}}
<x-alert />

<form action="{{URL::current()}}" method="GET" class="d-flex justify-content-between my-4">
    <x-form.input name="name" placeholder="Name" class="mx-2" :value="request('name')" />
    <select name="status" class="form-control mx-2">
        <option value="">All</option>
        <option value="active" @selected(request('status') == 'active')>Active</option>
        <option value="archived" @selected(request('status') == 'archived')>Archived</option>
    </select>
    <button class="btn btn-dark"> Filter</button>
</form>

<table class="table">
    <thead>
        <tr>
            <th>Images</th>
            <th>ID</th>
            <th>Name</th>
            <th>Status</th>
            <th>Parent</th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        {{-- @if ($category) // this variable is object and the object is true --}}
        {{-- @if ($category->count()) --}}
        {{-- @foreach ($category as $category) --}}
        @forelse ($categories as $category) {{-- equal [if, foreach] --}}
        <tr>
            <td><img src="{{asset('storage/' . $category->image)}}" style="width: 50px; hight:50px;" alt=""></td>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td>{{$category->status}}</td>
            <td>{{$category->parent_id}}</td>
            <td>{{$category->created_at}}</td>
            <td class=" d-flex justify-content-start align-items-center">
                <a href="{{route('dashboard.categories.edit', $category->id)}}">Edit</a>
                <form action="{{route('dashboard.categories.destroy', $category->id)}}" method="post" class="mx-2">
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

{{-- {{ $categories->links() }} --}}
{{ $categories->withQueryString()->links() }} {{-- we need to kee --}}

@endsection
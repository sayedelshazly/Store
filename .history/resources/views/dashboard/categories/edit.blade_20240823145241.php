@extends('layouts.dashboard')
@section('title', 'Edit Categories')


@section('breadcrumb')
{{-- @parent (we use this for inheritance that we show the parent then show the chields ) --}}
@parent
<li class="breadcrumb-item active">Categories</li>
<li class="breadcrumb-item active">Edit Categories</li>
@endsection

@section('content')

<form action="{{route('dashboard.categories.update', $category->id)}}" method="post">
    @csrf
    @method('PUT')  
    @include()
    
</form>



@endsection
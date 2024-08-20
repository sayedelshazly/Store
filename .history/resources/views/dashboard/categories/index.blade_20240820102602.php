@extends('layouts.dashboard')
@section('title', 'Categories')


@section('breadcrumb')
{{-- @parent (we use this for inheritance that we show the parent then show the chields )    --}}
@parent
<li class="breadcrumb-item active">Categories</li>
@endsection

@section('content')


<table>
    <thead>
        <tr>
            <th></th>
            <th>ID</th>
            <th>Name</th>
            <th>Parent</th>
            <th>Created At</th>
            <th></th>
        </tr>
    </thead>
    tbo
</table>


@endsection
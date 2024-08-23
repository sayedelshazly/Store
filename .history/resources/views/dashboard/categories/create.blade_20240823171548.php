@extends('layouts.dashboard')
@section('title', 'Create Categories')


@section('breadcrumb')
{{-- @parent (we use this for inheritance that we show the parent then show the chields ) --}}
@parent
<li class="breadcrumb-item active">Categories</li>
<li class="breadcrumb-item active">Create Categories</li>
@endsection

@section('content')

<form action="{{route('dashboard.categories.store')}}" method="post" enctype="multipart/form-data">
    @csrf

    @include('dashboard.categories.__form', [
        'button_lable' => 'Save'
    ])
    
</form>



@endsection
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
        
    </div>

</form>



@endsection
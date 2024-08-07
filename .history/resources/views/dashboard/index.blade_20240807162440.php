@extends('layouts.dashboard')
@section('title', 'Starter Page')
@section('breadcrumb')
{{-- @parent (we use this for inheritance that we show the parent then show the chields )    --}}
@parent
<li class="breadcrumb-item active">Starter Page</li>
@endsection
@section('content')
content
@endsection

@push('styles')
    {{-- any links  --}}
@endpush
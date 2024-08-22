@extends('layouts.dashboard')
@section('title', 'Starter Page')
@section('breadcrumb')
{{-- @parent (we use this for inheritance that we show the parent then show the chields ) --}}
@parent
<li class="breadcrumb-item active">Starter Page</li>
@endsection

<div class="mx-3">
    @section('content')
    content
    @endsection
</div>



@push('styles')
{{-- any links for css --}}
@endpush
@push('scripts')
{{-- any links for js --}}
@endpush
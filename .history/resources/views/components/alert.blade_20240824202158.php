@if (session()->has('success'))
        <div class="alert alert-success mt-5">
            {{session('success')}}
        </div>
    @endif
    @if (session()->has('delete'))
        <div class="alert alert-danger mt-5">
            {{session('delete')}}
        </div>
    @endif
    @if (session()->has('info'))
        <div class="alert alert-warning mt-5">
            {{session('info')}}
        </div>
    @endif
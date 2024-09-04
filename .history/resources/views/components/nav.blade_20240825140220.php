<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
        data-accordion="false">
        
        {{-- nav view component --}}
        @foreach ($items as $item)
            
        <li class="nav-item">
            <a href="{{route($item['route'])}}" class="nav-link">
                <i class="{{$item['icon']}}"></i>
                <p>
                    {{$item['title']}}
                    @if (isset($item['badge']))
                    <span class="right badge badge-danger">New</span>
                    @endif
                </p>
            </a>
        </li>
        @endforeach

    </ul>
</nav>
@push('navbar.right')

<ul class="nav navbar-nav navbar-right">  
    <li>
        <a href="/" target="_blank"><i class="fa fa-btn fa-globe"></i> На сайт</a>
    </li>
    @auth()
    <li class="dropdown user user-menu" style="margin-right: 20px;">
        <a href="#" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle">
            <span class="hidden-xs">{{ Auth::user()->name }}</span>
        </a> 
        <ul class="dropdown-menu">
            <li class="user-footer">
                <p>{{ Auth::user()->name }}</p>
            </li> 
            <li class="user-footer">
                <a href="{{ route('logOut')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa fa-btn fa-sign-out"></i>Выйти</a> 
            <form id="logout-form" action="{{ route('logOut')}}" method="POST" style="display: none;">@csrf @method('DELETE')</form>
            </li>
        </ul>
    </li>
    @endauth()
</ul>

@endpush

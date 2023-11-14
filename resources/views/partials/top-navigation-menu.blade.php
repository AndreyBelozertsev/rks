<nav class="navbar">
    <div class="container">
        <div class="navbar__wrap">
            <a class="logo" href="/" rel="home">
                <img src="{{ asset('template/images/logo.svg' ) }}" alt="{{ env('APP_NAME') }}">
            </a>
            <div class="hamb">
                <div class="hamb__field" id="hamb">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </div>
            <ul class="menu container" id="menu">
                @forelse ($menu->all() as $item)
                    <li><a href="{{ $item->link() }}" class="@if($item->isActive()) menu_active @endif"> {{ $item->label()  }}</a></li>
                @empty
                @endforelse
                @if (auth()->check())
                    <li>
                        <a href="{{ route('admin.dashboard') }}">В админ панель</a>
                    </li>
                    <li>
                        <form action="{{ route('logOut') }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Выйти</button>
                        </form>
                    </li>
                @endif
            </ul>
        </div>
    </div>
    <div class="bg-brand">
       @yield('breadcrumbs')
    </div>
    <div class="popup" id="popup"></div>
</nav>
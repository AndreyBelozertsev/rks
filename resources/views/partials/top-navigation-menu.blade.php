<nav class="navbar">
    <div class="container">
        <div class="navbar__wrap">
            <a class="logo" href="{{ route('home') }}" rel="home">
                <img src="{{ asset('template/images/logo.svg' ) }}">
            </a>
            <div class="hamb">
                <div class="hamb__field" id="hamb">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </div>
            <ul class="menu" id="menu">
                @forelse ($menu->all() as $item)
                    <li><a class="text-4xl" href="{{ $item->link() }}" class="@if($item->isActive()) font-bold @endif"> {{ $item->label()  }}</a></li>
                @empty
                @endforelse
                @if (auth()->check())
                    <li>
                        <span>{{ auth()->user()->name }}</span>
                        <a class="text-4xl" href="{{ route('admin.dashboard') }}">В админ панель</a>
                        <form action="{{ route('logOut') }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="text-4xl" type="submit">Выйти</button>
                        </form>
                    </li>
                @endif
            </ul>
        </div>
    </div>
    <div class="popup" id="popup"></div>

</nav>
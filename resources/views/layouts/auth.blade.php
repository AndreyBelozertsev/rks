
<!DOCTYPE html>
<html lang="ru">
@include('partials.head')
<body>
    @include('shared.flash')
    <main class="md:min-h-screen md:flex md:items-center md:justify-center py-16 lg:py-20">
        <div class="container">
            <!-- Page heading -->
            <div class="text-center">
                <a href="{{ route('home') }}" class="inline-block" rel="home">
                    <x-application-logo class="w-[148px] md:w-[201px] h-[36px] md:h-[50px]" />
                </a>
            </div>
            @yield('content')
        </div>
    </main>
    @include('partials.scripts-footer')
</body>
</html>
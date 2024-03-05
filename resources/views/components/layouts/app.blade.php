<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <title>{{ $title ?? 'Page Title' }}</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-dark navbar-expand-lg bg-body-dark text-white bg-black">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><span class="text-danger fw-bold ">A</span><span
                        class="fw-bold">T</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-center w-100">
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="page" href="{{ route('home') }}"
                                wire:navigate><span>Home</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('project') }}" wire:navigate><span>Projects</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('contact') }}"
                                wire:navigate><span>Contact</span></a>
                        </li>
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('login') }}" wire:navigate><span>Sign
                                        in</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('register') }}" wire:navigate><span>Sign
                                        up</span></a>
                            </li>
                        @endguest
                        @auth
                            <form action="{{route('logout')}}" method="post" id="logout">
                                @csrf
                            </form>
                            <script>
                                function logout() {
                                    document.getElementById("logout").submit();
                                }
                            </script>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#" wire:navigate onclick="logout()"><span>Logout</span></a>
                            </li>
                        @endauth

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        {{ $slot }}
    </main>

</body>

</html>

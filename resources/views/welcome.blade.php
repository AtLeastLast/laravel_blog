
<!DOCTYPE html>
<html>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

<body>
<nav class="navbar navbar-light mb-5" style="background-color: lightblue;">

        @php
        $request = Route::current()->uri();
        @endphp
        @if($request !== "login" and $request !== "registration")
            <x-dropdown />
        @endif
    <div class="container">
        <a class="navbar-brand" href="/">Homepage</a>
        <div>
            <ul class="nav">
                @guest
                    <ul class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </ul>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register-user') }}">Register</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
@yield('content')

</body>

</html>


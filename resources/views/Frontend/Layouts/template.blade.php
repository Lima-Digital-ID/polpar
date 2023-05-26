<!DOCTYPE html>
<html lang="en">

@include('Frontend.Components.head')

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">

        @include('Frontend.Components.navbar')

        <div class="container">
            @yield('content')
        </div>
    </main>

    @include('Frontend.Components.footer')

    @include('Frontend.Components.script')
</body>

</html>

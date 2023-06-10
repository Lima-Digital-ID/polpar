<!DOCTYPE html>
<html lang="en">

@include('Backend.Components.head')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        {{-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('backoffice') }}/img/AdminLTELogo.png" alt="AdminLTELogo"
                height="60" width="60">
        </div> --}}


        @include('Backend.Components.navbar')

        @include('Backend.Components.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        @include('Backend.Components.footer')
    </div>
    <!-- ./wrapper -->

    @include('Backend.Components.js')
</body>

</html>

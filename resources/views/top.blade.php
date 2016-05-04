<!DOCTYPE html>
<html>
@include('layout.headerpage')
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
    <header class="main-header">
        @include('partials.nav-top')
    </header>
    {{--@include('partials.aside')--}}
    <!-- Full Width Column -->
    <div class="content-wrapper">
        <div class="container">
            {{-- Content Header (Page header) --}}
            @include('layout.header')

            {{-- Main content --}}
            <section class="content">
                @yield('content')
            </section>
            {{-- /.content --}}
        </div>
        {{-- /.container --}}
    </div>
    {{-- /.content-wrapper --}}
    @include('layout.footer')
</div>
{{-- ./wrapper --}}
<div id="flash-notify"></div>
@include('layout.footerpage')

</body>
</html>

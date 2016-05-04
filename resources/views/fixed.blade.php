<!DOCTYPE html>
<html>
@include('layout.headerpage')
<body class="hold-transition @{{ skin }} fixed sidebar-mini sidebar-collapse">
<div class="wrapper">
    <header class="main-header">
        @include('partials.nav-fixed')
    </header>
    @include('partials.aside')
    <!-- Full Width Column -->
    <div class="content-wrapper">
            {{-- Content Header (Page header) --}}
            @include('layout.header')

            {{-- Main content --}}
            <section class="content">
                @yield('content')
            </section>
            {{-- /.content --}}
        {{-- /.container --}}
    </div>
    {{-- /.content-wrapper --}}
    @include('layout.footer')
</div>
{{-- ./wrapper --}}
@include('partials.control')
@include('layout.footerpage')

</body>
</html>

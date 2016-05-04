{{-- Logo --}}
<a href="../../index2.html" class="logo">
    {{-- mini logo for sidebar mini 50x50 pixels --}}
    <span class="logo-mini"><b>O</b>A</span>
    {{-- logo for regular state and mobile devices --}}
    <span class="logo-lg"><b>OA</b>LTE</span>
</a>
<nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </a>

    {{-- Menu de la derecha --}}
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            @include('partials.navbar.notifications')
            {{-- Opciones del usuario --}}
            @include('partials.navbar.user')
            <!-- Control Sidebar Toggle Button -->
            <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
        </ul>
    </div>
    {{-- ./container --}}
</nav>
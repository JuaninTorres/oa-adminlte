<nav class="navbar navbar-static-top">
    <div class="container">
        {{-- Logo --}}
        @include('partials.navbar.header')
        {{-- Opciones del menu --}}
        @include('partials.navbar.navegation')

        {{-- Menu de la derecha --}}
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                @include('partials.navbar.notifications')
                {{-- Opciones del usuario --}}
                @include('partials.navbar.user')
            </ul>
        </div>
    </div>
    {{-- ./container --}}
</nav>
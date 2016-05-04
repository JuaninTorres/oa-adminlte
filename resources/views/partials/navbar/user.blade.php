<li class="dropdown user user-menu">
    <!-- Menu Toggle Button -->
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <!-- The user image in the navbar-->
        <img src="{{ $currentUser->avatar or asset('images/user.png') }}" class="user-image" alt="User Image">
        <!-- hidden-xs hides the username on small devices so only the image appears. -->
        <span class="hidden-xs">{{ $currentUser->name }}</span>
    </a>
    <ul class="dropdown-menu">
        <!-- The user image in the menu -->
        <li class="user-header">
            <img src="{{ $currentUser->avatar or asset('images/user.png') }}" class="img-circle" alt="User Image">
            <p>
                {{ $currentUser->name }} - {{ $currentUser->role }}
                <small>{{ $currentUser->location }}</small>
            </p>
        </li>
        <!-- Menu Footer-->
        <li class="user-footer">
            <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Perfil</a>
            </div>
            <div class="pull-right">
                <a href="{{ route('logout_path') }}" class="btn btn-default btn-flat">Salir</a>
            </div>
        </li>
    </ul>
</li>
<nav class="app-header navbar navbar-expand bg-body">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item"> <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button"> <i
                        class="bi bi-list"></i> </a> </li>
            <li class="nav-item d-none d-md-block"> <a href="#" class="nav-link">Inicio</a> </li>
            <li class="nav-item d-none d-md-block"> <a href="#" class="nav-link">Sobre</a> </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown user-menu"> <a href="#" class="nav-link dropdown-toggle"
                    data-bs-toggle="dropdown">
                    <span class="d-none d-md-inline">{{ Auth::user()->email }}</span> </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <li class="user-header text-bg-primary">
                        <p>
                            {{ Auth::user()->name }} - Administrador
                            <small>Professor desde - {{ Auth::user()->created_at }}</small>
                        </p>
                    </li>
                    <li class="user-body">
                    </li>
                    <li class="user-footer">
                        <div class="row">
                            <div class="col-8"><a href="{{ route('profile.edit') }}"
                                    class="btn btn-default btn-flat">Perfil</a>
                            </div>
                            <div class="col-4">
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-default btn-flat float-end">Sair</button>
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>

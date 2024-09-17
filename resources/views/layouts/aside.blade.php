<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <div class="sidebar-brand">
        <span class="brand-text fw-light">SIS | CONTROLO DE NOTAS</span>
        </a>
    </div>

    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="bi bi-people-fill"></i>
                        <p>
                            Pessoal
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="{{ route('usuario.index') }}" class="nav-link"> <i class="bi bi-people-fill"></i>
                                <p>Usuários</p>
                            </a> </li>
                        <li class="nav-item"> <a href="./index2.html" class="nav-link active"> <i
                                    class="bi bi-people-fill"></i>
                                <p>Alunos</p>
                            </a> </li>
                        <li class="nav-item"> <a href="./index3.html" class="nav-link">
                                <i class="bi bi-people-fill"></i>
                                <p>Professores</p>
                            </a> </li>
                    </ul>
                </li>

                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
                        <p>
                            Pedidos
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="./widgets/small-box.html" class="nav-link"> <i
                                    class="nav-icon bi bi-list"></i>
                                <p>Transferencias</p>
                            </a> </li>
                        <li class="nav-item"> <a href="./widgets/info-box.html" class="nav-link"> <i
                                    class="nav-icon bi bi-list"></i>
                                <p>Certificados</p>
                            </a> </li>
                        <li class="nav-item"> <a href="./widgets/cards.html" class="nav-link"> <i
                                    class="nav-icon bi bi-list"></i>
                                <p>Termos</p>
                            </a> </li>
                    </ul>
                </li>
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-clipboard-fill"></i>
                        <p>
                            Classes
                            <span class="nav-badge badge text-bg-danger me-3"></span> <i
                                class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="{{ route('classe.index') }}" class="nav-link"> <i
                                    class="nav-icon bi bi-list"></i>
                                <p>Todas as classes</p>
                            </a> </li>
                    </ul>
                </li>
                <li class="nav-item"> <a href="#" class="nav-link"><i class="nav-icon bi bi-box-seam-fill"></i>
                        <p>
                            Turmas
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="{{ route('turma.index') }}" class="nav-link"> <i
                                    class="nav-icon bi bi-list"></i>
                                <p>Todas turmas</p>
                            </a> </li>
                    </ul>
                </li>
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-pencil-square"></i>
                        <p>
                            Permissões e regras
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="./forms/general.html" class="nav-link"> <i
                                    class="nav-icon bi bi-list"></i>
                                <p>Regras </p>
                            </a> </li>
                        <li class="nav-item"> <a href="./forms/general.html" class="nav-link"> <i
                                    class="nav-icon bi bi-list"></i>
                                <p>Permissões </p>
                            </a> </li>
                    </ul>
                </li>
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
                        <p>
                            Disciplinas
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="#" class="nav-link"> <i
                                    class="nav-icon bi bi-list"></i>
                                <p>Todas as disciplinas</p>
                            </a> </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
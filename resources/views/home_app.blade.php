<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Estoque User</title>
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="/home">Estoque FMB</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                {{-- ADICIONAR NAVBAR DE PESQUISA AQUI --}}
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Configurações</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="/">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Manager</div>
                            <a class="nav-link" href="#"><div class="sb-nav-link-icon">
                                <i class="fa-solid fa-user" style="color: #808080;"></i>
                                </div>Listar Usuarios</a>
                            <a class="nav-link" href="/produtos"><div class="sb-nav-link-icon"><i class="fa-solid fa-table" style="color: #808080;"></i></div>Listar Produtos</a>

                            <a class="nav-link" href="/produtos/novo"><div class="sb-nav-link-icon"><i class="fa-solid fa-plus" style="color: #808080;"></i></div>Adicionar Produto</a> 

                            <a class="nav-link" href="#"><div class="sb-nav-link-icon"><i class="fa-solid fa-trash" style="color: #808080;"></i></div>Remover Produto</a>
                            
                            <a class="nav-link" href="#"><div class="sb-nav-link-icon"><i class="fa-solid fa-pen-to-square" style="color: #808080;"></i></div>Alterar Produto</a>
                        </div>
                    </div>
                    {{-- Retornar usuário LOGADO AQUI --}}
                    <div class="sb-sidenav-footer">
                        <div class="small">Logado como:</div>
                        User ?
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Painel de Controle</h1>
                            <p class="breadcrumb-item active">Estoque FMB</p>
                @yield('conteudo')
            </div>
        </div>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; EstoqueFMB</div>
                </div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js\scripts.js') }}"></script>
        <script src="js\simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js\datatables-simple-demo.js"></script>
    </body>
</html>

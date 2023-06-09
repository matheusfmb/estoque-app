<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Home</title>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/stylehome.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <script src="https://kit.fontawesome.com/b88bdd215f.js" crossorigin="anonymous"></script>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="#page-top">Estoque FMB</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#about">Sobre</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Serviços</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contato</a></li>
                        <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-primary bg-gradient text-white">
            <div class="container px-4 text-center">
                <h1 class="fw-bolder">Sistema de controle de Estoque</h1>
                <p class="lead">Sistema de controle de estoque desenvolvido com PHP + Laravel</p>
                <a class="btn btn-lg btn-light" href="#about">Sobre o Projeto!</a>
            </div>
        </header>
        <!-- About section-->
        <section  id="about">
            <div class="d-flex container align-items-center">
                <a target="_blank" href="https://www.amazon.com.br/PHP-Laravel-aplica%C3%A7%C3%B5es-verdadeiro-artes%C3%A3o-ebook/dp/B019OU7TPK/ref=sr_1_4?__mk_pt_BR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=2UDXH7F2OSF9S&keywords=php+e+laravel&qid=1686345305&sprefix=php+e+larav%2Caps%2C312&sr=8-4" class="lead">
                    <img src="https://rick.net.br/uploads/images/202205/img_x500_6290ff0103b102-43937519-25314559.jpg" alt="Livro Turini" style="width: 200px">
                  </a>
                <div class="row gx-4 justify-content-center">
                  <div class="col-lg-8">
                    <h2>Sobre o Projeto</h2>
                    <p class="lead">Desenvolvendo uma solução para gerenciamento de estoque</p>
                    <p class="lead">Em resumo, o projeto "Sistema de Controle de Estoque em PHP + Laravel" tem como objetivo principal proporcionar uma experiência de aprendizado prática e realista, onde eu possa aplicar meus conhecimentos em desenvolvimento web e aprofundar minha compreensão sobre o PHP e o Laravel, seguindo o livro do professor Rodrigo Turini.</p>
                  </div>
                </div>
              </div>
            
         </section>
        <!-- Services section-->
        <section class="bg-light" id="services">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Serviços / Funcionalidades </h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact section-->
        <section id="contact">
            <div class="container px-4 text-center">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Contato</h2>
                        <a href="http://github.com/matheusfmb" target="_blank"><i class="fa-brands fa-github fa-4x" style="color: #000000;"></i></i></a>
                        <a href="https://www.linkedin.com/in/matheus-barros-875402242/" target="_blank"><i class="fa-brands fa-linkedin fa-4x"></i></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4"><p class="m-0 text-center text-white">Copyright &copy; Estoque FMB 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/scriptshome.js') }}"></script>
    </body>
</html>

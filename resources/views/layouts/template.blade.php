<?php
session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title> @yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- Herder -->
    <link rel="stylesheet" href="CSS/Herder.css">
    <!--Sidebar-->
    <link rel="stylesheet" href="CSS/Siderbar.css">
    <!--footer-->
    <link href="CSS/Footer.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <header class="topo">
        <div class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light">
            <div class="container">
                <div class="bx logo icon"><img src="IMG/site_logo.png" alt="alt" /></div>
                <a class="navbar-brand" href="index.html">Mastercell</a>
                <i class='bx bx-menu-nav navbar-toggler' id="btnnav"></i>
                </div>
            </div>
        </header>
        <div class=" sidebar">
                    <div class="logo-details">
                        <div class="bx logo icon"><img src="IMG/site_logo.png" /></div>
                        <div class="logo_name">Mastercell</div>
                        <i class='bx bx-menu' id="btn"> </i>
                    </div>
                    <ul class="nav-list">
                        <li>
                            <i class='bx bx-search'></i>
                            <input type="text" placeholder="Procurar..." name="Search">
                            <span class="tooltip">Procurar</span>
                        </li>
                        <div class="scroll-nav">
                            <li>
                                <a href="{{ url('/') }}">
                                    <i class='bx bx-grid-alt'></i>
                                    <span class="links_name">Home</span>
                                </a>
                                <span class="tooltip">Home</span>
                            </li>
                            <li>
                                <a href="../../MasterCell_web/Pg_login.php">
                                    <i class='bx bx-user'></i>
                                    <span class="links_name">usuário</span>
                                </a>
                                <span class="tooltip">usuário</span>
                            </li>
                            <li>
                                <a href="../../MasterCell_web/Carrinho.php">
                                    <i class='bx bx-cart'></i>
                                    <span class="links_name">Carrinho</span>
                                </a>
                                <span class="tooltip">Carrinho</span>
                            </li>
                            <li>
                                <a href="../../MasterCell_web/categoria.php">
                                    <i class='bx bxs-purchase-tag'></i>
                                    <span class="links_name">Categorias</span>
                                </a>
                                <span class="tooltip">Categorias</span>
                            </li>
                            <li>
                                <a href="../../MasterCell_web/Orçamento.php">
                                    <i class='bx bxs-wrench'></i>
                                    <span class="links_name">Orçamento</span>
                                </a>
                                <span class="tooltip">Orçamento</span>
                            </li>
                            <li>
                                <a href="../../MasterCell_web/Autenticação_SKY.php">
                                    <i class='bx bx-tv'></i>
                                    <span class="links_name">SKY</span>
                                </a>
                                <span class="tooltip">SKY</span>
                            </li>
                            <li>
                                <a href="../../MasterCell_web/Quem_somos.php">
                                    <i class='bx bxl-joomla'></i>
                                    <span class="links_name">Quem Somos</span>
                                </a>
                                <span class="tooltip">Quem Somos</span>
                            </li>
                            <li>
                                <a href="../../MasterCell_web/Contato.php">
                                    <i class='bx bx-chat'></i>
                                    <span class="links_name">Contato</span>
                                </a>
                                <span class="tooltip">Contato</span>
                            </li>
                            <li>
                                <a href="#">
                                    <i class='bx bx-cog'></i>
                                    <span class="links_name">Configuração</span>
                                </a>
                                <span class="tooltip">Configuração</span>
                            </li>
                        </div>
                        <li class="profile">
                            <div class="profile-details">
                                <?php if (isset($rows_usuario['Nome']) && $rows_usuario !== "") { ?>
                                    <img src="IMG/imagem-de-perfil.png" alt="IMG de perfil">
                                <?php } else { ?>
                                    <img src="IMG/imagem-de-perfil.png" alt="IMG de perfil">
                                <?PHP } ?>
                                <div class="name_job">
                                    <?php if (isset($rows_usuario['Nome']) && $rows_usuario !== "") { ?>
                                        <div class="name"><?php echo $rows_usuario['Nome']; ?></div>
                                        <div class="status" style="color: green;">online</div>
                                    <?php } else { ?>
                                        <div class="status" style="color: gray;">offline</div>
                                    <?PHP } ?>
                                </div>
                            </div>
                             <i class="bx bx-log-out" id="log_out"></i>'; 
                        </li>
                    </ul>
            </div>
            <selector class="home-section">
                @yield('content')
            </selector>
            <!-- footer -->
            <footer class="footer">
                <div class="col-12 row">
                    <!-- Grid container -->
                    <div class="col-12 col-md-6  p-3 d-flex justify-content-center">
                        <!-- Section: Social media -->
                        <div>
                            <h6 class="text-uppercase fw-bold">Nossas redes Sociais</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />

                            <p>
                                Você já acessou nossas redes sociais? <br>Fique por dentro de noticias, enventos e conteudos da Mastercell.
                            </p>

                            <div class="mt-4">
                                <!-- Facebook -->
                                <a type="button" class="btn btn-floating btn-primary btn-lg"><i class="bx bxl-facebook"></i></a>
                                <!-- Instagram -->
                                <a type="button" class="btn btn-floating btn-primary btn-lg"><i class="bx bxl-instagram"></i></a>
                                <!-- Youtube -->
                                <a type="button" class="btn btn-floating btn-primary btn-lg"><i class="bx bxl-youtube "></i></a>
                                <!-- Quem somos -->
                                <a type="button" href="../../MasterCell_web/Quem_somos.php" class="btn btn-floating btn-primary btn-lg"><i class="bx bxl-joomla"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 mx-auto p-3">
                        <!-- Section: Contato -->

                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Contato</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p><i class="bx bxs-location-plus mr-3"></i>R. Gov. Valadares, 255 - Centro, Riachinho - MG, 38640-000</p>
                        <p><i class="bx bxs-envelope mr-3"></i> mastercell@gmail.com</p>
                        <p><i class="bx bxs-phone mr-3"></i>(38) 99873-7740</p>
                        <!-- Grid column -->
                        <i class='bx bxl-gmail'></i>
                    </div>
                </div>


                <!-- Copyright -->
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                    © 2022 &Copy;
                    <a class="text-white" href="#">Siki.com.br</a>
                </div>
                <!-- Copyright -->
            </footer>
</body>
<script src="JS/Sidebar.js"></script>

</html>
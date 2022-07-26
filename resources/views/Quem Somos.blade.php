@extends('layouts.template')
@section('title', 'Quem Somos')
@section('content')

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link href="CSS/Quem_somos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container-fluid ">
            <div class="row ">
                <!-- ======= HERO ======= -->
                <section id="hero" class="d-flex align-items-center">  
                    <div class="container">
                        <h1>Mastercell</h1>
                        <h2>Seja bem vindo</h2>
                    </div> 
                </section><!-- End Hero -->
            </div>

            <div class="row d-flex justify-content-center">
                <!-- ======= Icon Boxes Section ======= -->
                <section id="icon-boxes" class="icon-boxes">
                    <div class="container">

                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 p-2" data-aos="fade-up">
                                <div class="icon-box">
                                    <div class="icon"><i class="bx bxs-wrench"></i></div>
                                    <h4 class="title"><a href="../../MasterCell_web/Orçamento.php">Manutenção</a></h4>
                                    <p class="description">Troca de telas, Conector de bateria.., Alto falante</p>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                                <div class="icon-box">
                                    <div class="icon"><i class="bx bxs-purchase-tag"></i></div>
                                    <h4 class="title"><a href="../../MasterCell_web/categoria.php">Acessorios</a></h4>
                                    <p class="description">Pelicula, Capinhas, Fones e muito mais</div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon-box">
                                    <div class="icon"><i class="bx bx-tv"></i></div>
                                    <h4 class="title"><a href="../../MasterCell_web/Autenticação_SKY.php">SKY</a></h4>
                                    <p class="description">Ativação, Atualização, Manutenção, Instalação</p>
                                </div>
                            </div>                        
                        </div>
                    </div>
                </section><!-- End Icon Boxes Section -->
            </div>
            <div class="row d-flex justify-content-center">
                <!-- ======= About Us Section ======= -->
                <section id="about" class="about m-2">
                    <div class="container" data-aos="fade-up">

                        <div class="section-title">
                            <h2>Quem Somos</h2>
                            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                        </div>

                        <div class="row content">
                            <div class="col-lg-6">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
                                    <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                                    <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 pt-4 pt-lg-0">
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                    culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                                <a href="../../MasterCell_web/contato.php" class="btn-learn-more">Entrar em contato</a>
                            </div>
                        </div>

                    </div>
                </section><!-- End About Us Section -->
            </div>
        </div>
    </body>
</html>
@endsection
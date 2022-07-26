@extends('layouts.template')
@section('title', 'Home')
@section('content')
<!DOCTYPE html>
<html lang="pt-br" >

    <head>
        <link href="CSS/home.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/ProdutosViw.css" rel="stylesheet" type="text/css"/>
    </head>

    <body onload="Iniciar()">
        <div class="container-fluid">
            <div class="Slider">
                <!-- ######### Slider ######### -->

                <div class="slider-container">

                    <div class="slides">
                        <div class="slider-image"><img src="https://images.unsplash.com/photo-1553095066-5014bc7b7f2d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8d2FsbCUyMGJhY2tncm91bmR8ZW58MHx8MHx8&w=1000&q=80" alt="background_1"></div>
                    </div> <!-- slider -->

                    <div class="slides">
                        <div class="slider-image"><img src="https://image.ibb.co/mGxNw5/background_2.jpg" alt="background_2"></div>
                    </div> <!-- slider -->

                    <div class="slides">
                        <div class="slider-image"><img src="https://image.ibb.co/gd5gpQ/background_3.jpg" alt="background_3"></div>
                    </div> <!-- slider -->

                    <div class="slides">
                        <div class="slider-image"><img src="https://image.ibb.co/jOgXw5/background_4.jpg" alt="background_4"></div>
                    </div> <!-- slider -->

                    <!-- Slider Next and Previous buttons -->
                    <a class="prev" onclick="plusIndex(-1)">&#10094;</a>
                    <a class="next" onclick="plusIndex(+1)">&#10095;</a>

                    <!-- Slider Selection Bullets -->
                    <div class="slider-bullets" id="slider-bullets">
                        <span class="dots" onclick="currentSlide(1)"></span>
                        <span class="dots" onclick="currentSlide(2)"></span>
                        <span class="dots" onclick="currentSlide(3)"></span>
                        <span class="dots" onclick="currentSlide(4)"></span>
                    </div> <!-- Slider Bullets -->

                </div> <!-- slider container -->
            </div>                        

            <!-- Start Featured Product -->
            <section class="bg-light">
                <div class="container py-3">
                    <div class="row text-center py-3">
                        <div class="col-lg-6 m-auto">
                            <h1 class="h1">Produto em destaque</h1>
                            <p>
                                Aqui tem alguns produtos de destaque da nossa loja 
                                Obs. Não são todos Busque ou clique nas categoria logo abaixo dos produtos em destaque!
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-md-4 card-produto  ">
                            <div class="card mb-4 product-wap rounded-0">
                                <div class="card rounded-0">
                                    <img class="card-img rounded-0 img-fluid" src="https://www.coreldraw.com/static/cdgs/images/pages/seo/tips/photo/basics/blur-background/blur-background-og.jpg">
                                </div>
                                <div class="card-body">
                                    <i class="h5 text-center" style="color: blue">Nome</i>
                                    <p class=" mb-0 text-right">R$ 20,00</p>
                                    <p class=" mb-0 text-center">Detalhes</p>
                                </div>
                            </div> 
                            <div class="footer-produto ">
                                <a href="#">
                                    <i  class="btn btn-success btn-lg mb-2" >Comprar</i>
                                </a>                        
                            </div>
                        </div>
                        <div class="col-6 col-md-4 card-produto  ">
                            <div class="card mb-4 product-wap rounded-0">
                                <div class="card rounded-0">
                                    <img class="card-img rounded-0 img-fluid" src="https://www.coreldraw.com/static/cdgs/images/pages/seo/tips/photo/basics/blur-background/blur-background-og.jpg">
                                </div>
                                <div class="card-body">
                                    <i class="h5 text-center" style="color: blue">Nome</i>
                                    <p class=" mb-0 text-right">R$ 20,00</p>
                                    <p class=" mb-0 text-center">Detalhes</p>
                                </div>
                            </div> 
                            <div class="footer-produto ">
                                <a href="#">
                                    <i  class="btn btn-success btn-lg mb-2" >Comprar</i>
                                </a>                        
                            </div>
                        </div>
                        <div class="col-6 col-md-4 card-produto  ">
                            <div class="card mb-4 product-wap rounded-0">
                                <div class="card rounded-0">
                                    <img class="card-img rounded-0 img-fluid" src="https://www.coreldraw.com/static/cdgs/images/pages/seo/tips/photo/basics/blur-background/blur-background-og.jpg">
                                </div>
                                <div class="card-body">
                                    <i class="h5 text-center" style="color: blue">Nome</i>
                                    <p class=" mb-0 text-right">R$ 20,00</p>
                                    <p class=" mb-0 text-center">Detalhes</p>
                                </div>
                            </div> 
                            <div class="footer-produto ">
                                <a href="#">
                                    <i  class="btn btn-success btn-lg mb-2" >Comprar</i>
                                </a>                        
                            </div>
                        </div>
                        <div class="col-6 col-md-4 card-produto  ">
                            <div class="card mb-4 product-wap rounded-0">
                                <div class="card rounded-0">
                                    <img class="card-img rounded-0 img-fluid" src="https://www.coreldraw.com/static/cdgs/images/pages/seo/tips/photo/basics/blur-background/blur-background-og.jpg">
                                </div>
                                <div class="card-body">
                                    <i class="h5 text-center" style="color: blue">Nome</i>
                                    <p class=" mb-0 text-right">R$ 20,00</p>
                                    <p class=" mb-0 text-center">Detalhes</p>
                                </div>
                            </div> 
                            <div class="footer-produto ">
                                <a href="#">
                                    <i  class="btn btn-success btn-lg mb-2" >Comprar</i>
                                </a>                        
                            </div>
                        </div>
                        <div class="col-6 col-md-4 card-produto  ">
                            <div class="card mb-4 product-wap rounded-0">
                                <div class="card rounded-0">
                                    <img class="card-img rounded-0 img-fluid" src="https://www.coreldraw.com/static/cdgs/images/pages/seo/tips/photo/basics/blur-background/blur-background-og.jpg">
                                </div>
                                <div class="card-body">
                                    <i class="h5 text-center" style="color: blue">Nome</i>
                                    <p class=" mb-0 text-right">R$ 20,00</p>
                                    <p class=" mb-0 text-center">Detalhes</p>
                                </div>
                            </div> 
                            <div class="footer-produto ">
                                <a href="#">
                                    <i  class="btn btn-success btn-lg mb-2" >Comprar</i>
                                </a>                        
                            </div>
                        </div>
                        <div class="col-6 col-md-4 card-produto  ">
                            <div class="card mb-4 product-wap rounded-0">
                                <div class="card rounded-0">
                                    <img class="card-img rounded-0 img-fluid" src="https://www.coreldraw.com/static/cdgs/images/pages/seo/tips/photo/basics/blur-background/blur-background-og.jpg">
                                </div>
                                <div class="card-body">
                                    <i class="h5 text-center" style="color: blue">Nome</i>
                                    <p class=" mb-0 text-right">R$ 20,00</p>
                                    <p class=" mb-0 text-center">Detalhes</p>
                                </div>
                            </div> 
                            <div class="footer-produto ">
                                <a href="#">
                                    <i  class="btn btn-success btn-lg mb-2" >Comprar</i>
                                </a>                        
                            </div>
                        </div>
                    </div>                        
            </section>
            <!-- End Featured Product -->
            <!--Principais categorias-->
            <div class="row">
                <div class="col-md-12">
                    <div class="row">                       
                        <div class="live_scroll ">   
                            <div class="row text-center">
                                <div class="col-5 live_scroll-box">
                                    <img alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg" class="rounded-circle" />
                                    <h5 class="text-center">
                                        Manutrção
                                    </h5>
                                </div>                                 
                                <div class="col-5 live_scroll-box">
                                    <img alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg" class="rounded-circle" />
                                    <h5 class="text-center">
                                        Carregadores
                                    </h5>
                                </div>                                 
                                <div class="col-5 live_scroll-box">
                                    <img alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg" class="rounded-circle" />
                                    <h5 class="text-center">
                                        Peliculas
                                    </h5>
                                </div>                                 
                                <div class="col-5 live_scroll-box">
                                    <img alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg" class="rounded-circle" />
                                    <h5 class="text-center">
                                        Capinha
                                    </h5>
                                </div>                                 
                                <div class="col-5 live_scroll-box">
                                    <img alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg" class="rounded-circle" />
                                    <h5 class="text-center">
                                        Roteadores
                                    </h5>
                                </div>                                 

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--FIM PRINCIPAIS PRODUTOS-->
        </div>
        <script src="JS/home.js" type="text/javascript"></script>
        <script src="JS/ProdutosViw.js"></script>
    </body>
</html>
@endsection
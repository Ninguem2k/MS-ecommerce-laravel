@extends('layouts.template')
@section('title', 'Home')
@section('content')

<!DOCTYPE html>

<html lang="pt-br" dir="ltr">

    <head>
        <link href="CSS/PG_venda.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/ProdutosViw.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
            <div class="container-fluid">
                <!--Open Content--> 
                <div class="row">
                    <div class="col-lg-5 mt-5">
                        <div class="card mb-3">
                            <img class="CAP-IMG card-img img-fluid" src="" alt="Card image cap" id="product-detail">
                        </div>
                        <div class="row">
                            <!--Start Controls-->
                            <div class="col-1 align-self-center">
                                <i class='bx bxs-left-arrow' style="color: blue"></i>
                                <span class="sr-only">Previous</span>
                            </div>
                            <!--End Controls-->
                            <!--Start Carousel Wrapper-->
                            <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel">
                                <!--Start Slides-->
                                <div class="carousel-inner product-links-wap" role="listbox">

                                    <!--First slide-->
                                    <div class="carousel-item active">              
                                        <div class="row">
                                            <div class="col-4 collapse show ">
                                                <a href="#">
                                                    <img class="P-IMG card-img img-fluid Item" src="https://image.ibb.co/gd5gpQ/background_3.jpg" alt="Product Image 1">
                                                </a>
                                            </div>
                                            <div class="col-4 collapse show  ">
                                                <a href="#">
                                                    <img class="P-IMG card-img img-fluid Item" src="https://image.ibb.co/mGxNw5/background_2.jpg" alt="Product Image 2">
                                                </a>
                                            </div>
                                            <div class="col-4 collapse show ">
                                                <a href="#">
                                                    <img class=" P-IMG card-img img-fluid Item" src="https://image.ibb.co/jOgXw5/background_4.jpg" alt="Product Image 3">
                                                </a>
                                            </div>
                                            <div class="col-4 collapse  ">
                                                <a href="#">
                                                    <img class="P-IMG card-img img-fluid Item" src="https://img.freepik.com/fotos-gratis/imagem-aproximada-em-tons-de-cinza-de-uma-aguia-careca-americana-em-um-fundo-escuro_181624-31795.jpg?size=626&ext=jpg" alt="Product Image 1">
                                                </a>
                                            </div>
                                            <div class="col-4 collapse  ">
                                                <a href="#">
                                                    <img class="P-IMG card-img img-fluid Item" src="https://wallpapersfull.com/wallpapers/2019/wallpaper-imagem-surreal-de-planetas-azul-5640.jpg" alt="Product Image 2">
                                                </a>
                                            </div>
                                            <div class="col-4 collapse  ">
                                                <a href="#">
                                                    <img class=" P-IMG card-img img-fluid Item" src="https://files.passeidireto.com/0a3e76c4-ddeb-4d9f-984f-3324c0ee4e41/0a3e76c4-ddeb-4d9f-984f-3324c0ee4e41.jpeg" alt="Product Image 3">
                                                </a>
                                            </div>
                                            <div class="col-4 collapse  ">
                                                <a href="#">
                                                    <img class=" P-IMG card-img img-fluid Item" src="https://tutorialtec.com.br/wp-content/uploads/2021/09/deixar-pc-bonito.jpg" alt="Product Image 3">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/.First slide-->
                                </div>
                                <!--End Slides-->
                            </div>
                            <!--End Carousel Wrapper-->
                            <!--Start Controls-->
                            <div class="col-1 align-self-center">
                                <i class='bx bxs-right-arrow'style="color: blue"></i>
                                <span class="sr-only">Next</span>
                            </div>
                            <!--End Controls-->
                        </div>
                    </div>
                    <!--col end--> 
                    <div class="col-lg-7 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="h2">Nome do produto</h1>
                                <p class="h3 py-2">Valor</p>

                                <h6>Descrição:</h6>
                                <p></p>

                                <form action="" method="GET">
                                    <input type="hidden" name="product-title" value="Activewear">
                                    <div class="row">
                                        <div class="col-auto">
                                            <ul class="list-inline pb-3">
                                                <li class="list-inline-item text-right">
                                                    Quantidade
                                                    <input type="hidden" name="product-quanity" id="product-quanity" value="1">
                                                </li>
                                                <li class="list-inline-item"><span class="btn btn-success" id="btn-minus">-</span></li>
                                                <li class="list-inline-item"><input type="number" name="quantidade" id="var-value" style="width: 50px; height: 40px;  -moz-appearance:textfield;"></li>
                                                <li class="list-inline-item"><span class="btn btn-success" id="btn-plus">+</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row pb-3">
                                        <div class="col d-grid">
                                            <button type="submit" class="btn btn-success btn-lg mb-2" name="submit" value="buy">Comprar</button>
                                        </div>
                                        <div class="col d-grid">
                                            <button type="submit" class="btn btn-success btn-lg" name="submit" value="addtocard">Adicionar no carrinho</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Produtos INFERIOR-->
                <div class="row" style="margin: 20px;">
                    <div class="live_scroll ">   
                        <div class="col-3  card-produto  ">
                            <div class="card mb-4 product-wap rounded-0">
                                <div class="card rounded-0">
                                    <img class="card-img rounded-0 img-fluid" src="img/jason-dent-3wPJxh-piRw-unsplash.jpg">
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
                        <div class="col-3 card-produto  ">
                            <div class="card mb-4 product-wap rounded-0">
                                <div class="card rounded-0">
                                    <img class="card-img rounded-0 img-fluid" src="img/jason-dent-3wPJxh-piRw-unsplash.jpg">
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
                        <div class="col-3 card-produto  ">
                            <div class="card mb-4 product-wap rounded-0">
                                <div class="card rounded-0">
                                    <img class="card-img rounded-0 img-fluid" src="img/jason-dent-3wPJxh-piRw-unsplash.jpg">
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
                        <div class="col-3 card-produto  ">
                            <div class="card mb-4 product-wap rounded-0">
                                <div class="card rounded-0">
                                    <img class="card-img rounded-0 img-fluid" src="img/jason-dent-3wPJxh-piRw-unsplash.jpg">
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
                        <div class="col-3 card-produto  ">
                            <div class="card mb-4 product-wap rounded-0">
                                <div class="card rounded-0">
                                    <img class="card-img rounded-0 img-fluid" src="img/jason-dent-3wPJxh-piRw-unsplash.jpg">
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
                        <div class="col-3 card-produto  ">
                            <div class="card mb-4 product-wap rounded-0">
                                <div class="card rounded-0">
                                    <img class="card-img rounded-0 img-fluid" src="img/jason-dent-3wPJxh-piRw-unsplash.jpg">
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
                        <div class="col-3 card-produto  ">
                            <div class="card mb-4 product-wap rounded-0">
                                <div class="card rounded-0">
                                    <img class="card-img rounded-0 img-fluid" src="img/jason-dent-3wPJxh-piRw-unsplash.jpg">
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
                </div>
                <!--FIM Produtos INFERIOR-->
            </div>
        <script src="JS/PG_venda.js" type="text/javascript"></script>
        <script src="JS/ProdutosViw.js"></script>
    </body>
</html>
@endsection
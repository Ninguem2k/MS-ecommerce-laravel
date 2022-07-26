@extends('layouts.template')
@section('title', 'Home')
@section('content')
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link href="CSS/ProdutosViw.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
            <!-- ======= Produtos/Categorias ======= -->
            <div class="container py-3">
                <div class="row text-center py-2">
                    <div class="col-lg-6 m-auto p-2">
                        <h1 class="h1" style="color: white;">Categoria</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-6 card-produto  ">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="img/jason-dent-3wPJxh-piRw-unsplash.jpg">
                            </div>
                            <div class="card-body">
                                <i class="h5 text-center" style="color: blue">Teste Produto</i>
                                <p class=" mb-0 text-right">R$250.00</p>
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
            <!-- ======= END->Produtos/Categorias ======= -->
        <script src="JS/ProdutosViw.js"></script>
    </body>
</html>
@endsection
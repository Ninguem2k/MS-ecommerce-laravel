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
        <link href="CSS/Carrinho.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container h-100 w-100">
            <div class="card text-center align-middle h-100 m-2">
                <div class="card-header">
                    <strong style="font-size: 24px">Carrinho</strong>
                </div>

                <div class="row">  
                    <div class="col-md-12 col-lg-8 card-body">  
                        <div class="scroll-produto">                         
                            <div class="produto">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-1 d-flex align-items-center">
                                            <input type="checkbox" name="Intens" value="ON" />
                                        </div>
                                        <div class="col-md-3">
                                            <img style="width: 100px; height: 100px;" src="img/jason-dent-3wPJxh-piRw-unsplash.jpg" alt=""/>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="row">
                                                <h4 class="float-left">  Titulo do produto</h4></div>
                                            <div class="col-12">                                   
                                                <div class="row">
                                                    <h5 class="float-left">
                                                        Quantidade
                                                    </h5>
                                                </div>
                                                <div class="row ipvalor">
                                                    <div class=" ipvalor">
                                                        <li class="list-inline-item"><span class="btn btn-success" id="btn-minus">-</span></li>
                                                        <li class="list-inline-item"><input type="number" name="quantidade" id="var-value" style="width: 50px; height: 40px;  -moz-appearance:textfield;"></li>
                                                        <li class="list-inline-item"><span class="btn btn-success" id="btn-plus">+</span></li>
                                                    </div>                                                
                                                </div>                                                
                                            </div>     
                                        </div>
                                        <div class="col-md-3">
                                            <div class="row">
                                                <h4>Valor</h4>
                                            </div>
                                            <div class="row">
                                                <h5>R$: 0.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="summary">
                            <h3>Resumo</h3>
                            <div class="summary-item"><span class="text">Subtotal</span><span class="price">R$0</span></div>
                            <div class="summary-item"><span class="text">Desconto</span><span class="price">R$0</span></div>
                            <div class="summary-item"><span class="text">Envio</span><span class="price">R$0</span></div>
                            <div class="summary-item"><span class="text">Total</span><span class="price">R$0</span></div>
                        </div>
                    </div>
                </div> 
                <div class="card-footer text-muted">
                    <div class="row float-right">
                        <input type="submit" class="btn btn-success btn-lg px-3 float-right m-2" value="Comprar" />
                        <input type="submit" class="btn btn-danger btn-lg px-3 float-right m-2" value="Remover" />
                        <input type="submit" class="btn btn-info btn-lg px-3 float-right m-2" value="Selecionar tudo" />
                    </div>
                </div>
            </div>
        </div>
        <script src="JS/quantidade.js"></script>
    </body>
</html>
@endsection
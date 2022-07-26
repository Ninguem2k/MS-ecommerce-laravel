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
        <?Php include 'CSS/Sidebar.php'; ?>
        <section class="home-section">
            <div class="container p-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card bg-btn-warning">
                            <div class="card-header">
                                <div class="row d-flex justify-content-center text-black">                                    
                                    <h3 class="text-center m-2">Nome do usruario</h3>
                                    <h5 class="text-right m-2">06/01/2022</h5>
                                    <div style="width: 20px; height: 20px;  border-radius: 100%; background-color: red;"></div>
                                    <!--<div style="width: 20px; height: 20px;  border-radius: 100%; background-color: green;"></div>--> 
                                </div> 
                                <div class="row">
                                    <div class="col-4 d-flex justify-content-center">
                                        <input type="submit" class="btn-info p-2 btn-show" value="Visualizar" />
                                    </div>
                                    <div class="col-4 d-flex justify-content-center">
                                        <input type="submit" class="bg-success p-2" value="Concluir" />
                                    </div>
                                    <div class="col-4 d-flex justify-content-center">
                                        <input type="submit"  class="btn-danger p-2" value="Remover" />
                                    </div>
                                </div>
                            </div>
                            <div class="collapse ">
                                <div class="card-body ">
                                    Informações
                                </div>
                            </div>                         
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="JS/Sidebar.js"></script>
        <script src="JS/collapse.js" type="text/javascript"></script>
    </body>
</html>
@endsection
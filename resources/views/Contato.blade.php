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
        <!-- Load map styles -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    </head>
    <body>
            <div class="container" style="padding-left: 0px; padding-right: 0; max-width: 100%;">   
                <!-- Start Map -->
                <div id="mapid" style="width: 100%; height: 300px;"></div>
                <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
                <!-- Ena Map -->
                <!-- Start Contact -->  
                <div class="container">      
                    <div class="row py-5">
                        <div class=" col-12 Form-contato text-white">
                            <form class="col-md-9 m-auto" method="post" role="form">
                                <div class="row">
                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputname">Nome</label>
                                        <input type="text" class="form-control mt-1" id="name" name="name" placeholder="Nome">
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputemail">Email</label>
                                        <input type="email" class="form-control mt-1" id="email" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputsubject">Assunto</label>
                                        <input type="text" class="form-control mt-1" id="subject" name="subject" placeholder="Assunto">
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputsubject">Telefoe</label>
                                        <input type="text" class="form-control mt-1 " id="telefone" name="telefone" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" placeholder="Telefone">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="inputmessage">Mesagem</label>
                                    <textarea class="form-control mt-1" id="message" name="message" placeholder="Mesagem" rows="8"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col text-end mt-2 ">
                                        <button type="submit" class="btn btn-success btn-lg px-3 float-right">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Contact -->
            <script src="JS/Contato.js"></script>
    </body>
</html>
@endsection

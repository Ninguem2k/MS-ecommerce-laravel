@extends('layouts.template')
@section('title', 'SKY')
@section('content')

<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
            <div class="container" style="padding-left: 0px; padding-right: 0; max-width: 100%;">   
                <div class="col-12 text-center p-2 text-white py-5">
                    <h3>Autenticação SKY</h3>
                    <h4>Informe seus dados entraremos em contato via whatsapp em até 24h</h4>
                </div>
                <!-- Start Contact -->  
                <div class="container">      
                    <div class="row py-5">
                        <div class=" col-12 Form-contato">
                            <form class="col-md-9 m-auto text-white" method="post" role="form">
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
                                        <label for="inputsubject">Código</label>
                                        <input type="text" class="form-control mt-1" id="subject" name="subject" placeholder="Código">
                                    </div>
                                    <div class="form-group col-md-6 mb-3">
                                        <label for="inputsubject">Telefoe</label>
                                        <input type="text" class="form-control mt-1 " id="telefone" name="telefone" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" placeholder="Telefone">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="inputmessage">Imagens</label>
                                    <input type="file" id="upload" name="image[]" value="" multiple="multiple" /><br> 
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
    </body>
</html>
@endsection
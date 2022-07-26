@extends('layouts.template')
@section('title', 'Home')
@section('content')
<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="pt-br" dir="ltr">

    <head>
        <?php include 'CSS/Head/head.php'; ?>
    </head>

    <body>
        <?php include 'CSS/Siderbar/Sidebar.php'; ?>
        <section class="home-section">
            <div class="container h-100 ">
                <div class="row h-100 justify-content-center align-items-center">
                    <div class="col-8" style="background: #ffffff; font-size:16px">
                        <div class="modal-header">                      
                            <h4 class="modal-title text-center" id="myModalLabel">Cadastrar Produto</h4>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="Cad_prod.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">Nome:</label>
                                    <input name="Nome" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">Quantidade:</label>
                                    <input name="Quantidade" type="number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">Valor:</label>
                                    <input name="Valor" type="number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">Quantidade de pacelas</label>
                                    <input name="QNT_parcelas" type="number" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">Tem jurus</label>
                                    <select name="Jurus">
                                        <option>Sim</option>
                                        <option>Não</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="control-label">Detalhes:</label>
                                    <textarea name="Detalhes" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="control-label">IMGs:</label>
                                    <input type="file" id="upload" name="image[]" value="" multiple="multiple" /><br> 
                                </div>
                                <div class="modal-footer">
                                    <button type="submit"  name="cadastrar" class="btn btn-success">Cadastrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include 'JS/Footer/Footer.php'; ?>
        <script src="JS/Sidebar.js"></script>
    </body>
</html>
@endsection
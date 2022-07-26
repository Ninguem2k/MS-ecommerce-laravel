@extends('layouts.template')
@section('title', 'Home')
@section('content')
<!DOCTYPE html>
<html lang="pt-br" >

    <head>
    </head>

    <body>
            <div class="container theme-showcase" role="main">     
                <div class="pull-right">
                    <a href="Cadastro.php" type="button" class="btn btn-xs btn-success">Cadastrar</a>
                </div>
                <div class="page-header">
                    <h1>Listar Produtos</h1>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome do PRODUTO</th>
                                    <th>Quantidade</th>
                                    <th>Status</th>
                                    <th>Class</th>
                                    <th>Subclass</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while (count($this->dados2)) { ?>
                                    <tr>
                                        <td></td>                                                      
                                        <td>
                                            <a href="processa_apagar.php?id=<?php echo $rows_produto['Id']; ?>"><button type="button" class="btn btn-xs btn-danger">Apagar</button></a>
                                            <a href="processa_apagar.php?id=<?php echo $rows_produto['Id']; ?>"><button type="button" class="btn btn-xs btn-danger">Editar</button></a>
                                            <a href="processa_apagar.php?id=<?php echo $rows_produto['Id']; ?>"><button type="button" class="btn btn-xs btn-danger">ON/OFF</button></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>		
            </div>
    </body>
</html>
@endsection
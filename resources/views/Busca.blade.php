@extends('layouts.template')
@section('title', 'Home')
@section('content')
<!--<!DOCTYPE html>
<html lang="pt-br" >

    <head>
        <link href="Formatação/CSS/ProdutosViw.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        ======= Produtos/Categorias ======= 
        <div class="container py-3">
            <div class="row text-center py-2 d-flex justify-content-center align-items-center">
                <form action="BUSCA.php" method="POST" >
                    <div class="input-group mb-4">
                        <input type="text" class="form-control" id="inputModalSearch" name="Search" placeholder="Search ...">
                        <button type="submit" name="busca" class="input-group-text bg-success text-light">
                            <i class="bx bx-search-alt-2 text-white"></i>
                        </button>
                    </div>
                </form>
            </div> 
            <div class="row">
                <?PHP for ($i = 0; $i < count($resultado_produtos); $i++) { ?>


                    <div class="col-md-4 col-6 card-produto  ">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="img/jason-dent-3wPJxh-piRw-unsplash.jpg">
                            </div>
                            <div class="card-body">
                                <i class="h5 text-center" style="color: blue"><?= $resultado_produtos[$i]['Nome'] ?></i>
                                <p class=" mb-0 text-right">R$<?= $resultado_produtos[$i]['Valor'] ?></p>
                                <p class=" mb-0 text-center"><?= $resultado_produtos[$i]['Detalhes'] ?></p>
                            </div>
                        </div> 
                        <div class="footer-produto ">
                            <a href="#">
                                <i  class="btn btn-success btn-lg mb-2" >Comprar</i>
                            </a>                        
                        </div>
                    </div>             

                <?php } ?>
            </div>
            ======= END->Produtos/Categorias ======= 

            <div div="row">
                <ul class="pagination pagination-lg justify-content-end ">
                    <li class="page-item">
                        <a class="page-link active rounded-0  shadow-sm border-top-0 border-left-0" href="Busca?pagina=1" tabindex="-1">Primeira</a>
                    </li>

                    <?php
                    for ($iPag = $pagina - $MaxLinks; $iPag <= $pagina - 1; $iPag++) {
                        if ($iPag >= 1) {
                            echo '   '
                            . '<li '
                            . 'class = "page-item"><a class="page-link active rounded-0  shadow-sm border-top-0 border-left-0 " href="BUSCA?pagina=', $iPag, '">', $iPag, '</a>'
                            . '</li> ';
                        }
                    }
                    ?>
                    <li class="page-item">
                        <?php
                        echo ' <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="#">', $pagina, '</a>'
                        ?>
                    </li>                        


                    <?php
                    for ($dPag = $pagina + 1; $dPag <= $pagina + $MaxLinks; $dPag++) {
                        if ($dPag <= $quantidade_pg) {
                            echo '   '
                            . '<li '
                            . 'class = "page-item"><a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="BUSCA?pagina=', $dPag, '">', $dPag, '</a>'
                            . '</li> ';
                        }
                    }
                    ?>

                    <li class="page-item">
                        <?php
                        echo '<a class="page-link active rounded-0  shadow-sm border-top-0 border-left-0 " href="Busca?pagina= ', $quantidade_pg, ' " tabindex="-1">Ultimo</a>';
                        ?>
                    </li>              
                </ul>
            </div>
        </div>

        End Content 
    </section>  
    <script src="Formatação/JS/ProdutosViw.js"></script>

</body>
</html>-->
@endsection
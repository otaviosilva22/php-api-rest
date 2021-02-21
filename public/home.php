<?php
    require_once "../funcoes/listaProduto.php";
?>

<html>
    <head>
        <!-- Tags Metas -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        
        <!-- Tag Title -->
        <title>PHP - API REST</title>

        <!-- Importação do CSS externio -->        
        <link rel="stylesheet" type="text/css" href="estilo/estilo.css"/>
            
        <!-- Importação do Ajax jQuery -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    
        <!-- Importação do Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        
    </head>
    <body>
        <section id="principal" class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 id="titulo">API REST </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul id="lista">
                        <li> <a href="https://github.com/otaviosilva22/php-api-rest" style="color:black;"> Documentação </li>
                        <li> <a href="../api/estoque/produto" style="color:black;"> Json </a> </li>
                    </ul>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <form method="POST" action="#">
                        <div class="form-group">
                            <input name="produto" type="text" class="form-control" placeholder="Digite o nome do produto..." autocomplete="off"></input>
                            <input type="submit" name="pesquisar" value="Pesquisar" id="pesquisar">
                        </div>
                    </form>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <div id="relacao">
                        <table class="table table-hover text-center">
                            <tr>
                                <th>Id</th>
                                <th>Nome</th>
                                <th>Quantidade</th>
                            </tr>
                            <?php
                                if (isset($_POST["pesquisar"])){
                                    listaProduto();
                                }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>

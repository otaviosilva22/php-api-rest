<?php

    //função de listagem dos produtos em tabela
    function listaProduto(){

        
        //verifica se existe algo a se pesquisar
        if (!empty($_POST["produto"])){
            $pesquisa = $_POST["produto"];

            //coleta o json da api
            $arquivo = file_get_contents('http://localhost/php-api/api/estoque/read/'.$pesquisa.'');
        
            //decodifica json
            $json = json_decode($arquivo);
        }else{
            //coleta o json da api
            $arquivo = file_get_contents('http://localhost/php-api/api/estoque/produto');
            
            //decodifica json
            $json = json_decode($arquivo);

        }
    
        foreach($json->dados as $registro):
            echo '<tr>'.
            '<td>'.$registro->id.'</td>'.
            '<td>'.$registro->nome.'</td>'.
            '<td>'.$registro->quantidade.'</td></tr>';
        endforeach;
    
    }


?>
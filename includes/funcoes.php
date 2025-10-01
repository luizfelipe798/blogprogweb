<?php
    // Esse arquivo contém a função limparDados, que serve para higienizar os dados recebidos via GET ou POST
    function limparDados(string $dado) : string
    {
        $tags = '<p><strong><i><ul><ol><li><h1><h2><h3>';

        $retorno = htmlentities(strip_tags($dado, $tags));

        return $retorno;
    }
?>
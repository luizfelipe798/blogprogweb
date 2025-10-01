<?php
    // Esse arquivo é responsável por conectar e desconectar do banco de dados MySQL
    // e retornar a conexão quando necessário

    // Retorna objeto myhsqli, que representa a conexão com o banco de dados
    function conecta() : mysqli
    {
        $servidor = 'localhost';
        $banco = 'blog';
        $port = 3306;
        $usuario = 'root';
        $senha = '815674815';
    // tentativa de se conectar ao banco de dados
        $conexao = mysqli_connect($servidor, $usuario, $senha, $banco, $port);

        if(!$conexao)
        {
            echo 'Erro: Não foi possível conectar ao MySql.' . PHP_EOL;
            echo 'Debugging errno: ' . mysqli_connect_errno() . PHP_EOL;
            echo 'Debugging error: ' . mysqli_connect_error() . PHP_EOL;
            return null;
        }
        
        return $conexao;
    }

    function desconecta($conexao)
    {
        mysqli_close($conexao);
    }
?>
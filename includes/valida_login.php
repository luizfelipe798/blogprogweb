<?php
    // Esse arquivo valida se o usuário está logado, caso contrário redireciona para a página de login
    // Além disso, armazena a URL da página atual para possibilitar o retorno após o login
    // A página atual é armazenada na variável de sessão 'utl_retorno'
    
    $_SESSION['utl_retorno'] = $_SERVER['PHP_SELF'];

    if(!isset($_SESSION['login']))
    {
        header('Location: login_formulario.php');
        exit;
    }
?>
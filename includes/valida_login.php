<?php
    $_SESSION['utl_retorno'] = $_SERVER['PHP_SELF'];

    if(!isset($_SESSION['login']))
    {
        header('Location: login_formulario.php');
        exit;
    }
?>
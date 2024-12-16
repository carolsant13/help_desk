<?php 

    session_start();
/*
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    //remover indices especificos
    unset($_SESSION['x']); //remove indice apenas se existir

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    //destruir a variavel 
    session_destroy(); 
    //forçar um redirecionamento
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
*/

    session_destroy();
    header('Location: index.php');
?>
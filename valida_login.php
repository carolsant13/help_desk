<?php 

    session_start();

    $_SESSION['x']='valor pipip';
    print_r(($_SESSION));
    echo'<hr />';
    echo $_SESSION['y'] . '<br />';

//variavel de autenticação
$ususario_autenticado= false;


//usuarios do sistema
$usuarios_app =array(
    array('email'=> 'user@teste.com.br', 'senha' =>'abcde'),
    array('email'=> 'adm@teste.com.br', 'senha' =>'12345'),
);
foreach($usuarios_app as $user){
    if($user['email']== $_POST['email'] && $user['senha']== $_POST['senha']){
        $ususario_autenticado= true;
    }
    
}

if($ususario_autenticado){
    echo 'usuario autenticado';
}else{
    header('Location: index.php?login=erro');
}
/*
    print_r($_GET); // aparece na url as informações inseridas pelo form 

    echo '<br />';

    echo $_GET['email'];
    echo $_GET['senha'];
*/
   // print_r($_POST);  adiciona os dados na propria requisição, não aparece na url
?>
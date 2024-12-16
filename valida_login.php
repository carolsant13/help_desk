<?php 

    session_start();

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
    $_SESSION['autenticado']= "SIM";
    $_SESSION['x']= "valor";
    $_SESSION['y']= "outro";
    header('Location: home.php');
}else{
    $_SESSION['autenticado']= "NÂO";
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
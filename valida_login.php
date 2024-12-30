<?php 

    session_start();

//variavel de autenticação
$ususario_autenticado= false;
$usuario_id= null;
$user_perfil_id= null;

$perfis = array(1 => 'adm' , 2=> 'user');

//usuarios do sistema
$usuarios_app =array(
    array('id'=>1,'email'=> 'user@teste.com.br', 'senha' =>'abcde', 'perfil_id'=>1),
    array('id'=>2,'email'=> 'adm@teste.com.br', 'senha' =>'12345', 'perfil_id'=>1),
    array('id'=>3,'email'=> 'jose@teste.com.br', 'senha' =>'12345', 'perfil_id'=>2),
    array('id'=>4,'email'=> 'maria@teste.com.br', 'senha' =>'12345', 'perfil_id'=>2),
);
foreach($usuarios_app as $user){
    if($user['email']== $_POST['email'] && $user['senha']== $_POST['senha']){
        $ususario_autenticado= true;
        $usuario_id= $user['id'];
        $user_perfil_id = $user['perfil_id'];
    }
    
}

if($ususario_autenticado){
    $_SESSION['autenticado']= "SIM";
    $_SESSION['id']= $usuario_id;
    $_SESSION['perfil_id']= $user_perfil_id;
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
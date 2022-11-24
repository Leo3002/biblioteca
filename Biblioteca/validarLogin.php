<?php
    include 'conexao.php';

    session_start();

    $Vemail = $_POST['txtemail'];
    $Vsenha = $_POST['txtpassword'];

    $consulta = $cn->query("select codUsuario, nomeUsuario,email,senha,statusUsu from usuario where email = '$Vemail' and senha = '$Vsenha'");

    if($consulta->rowCount() == 1){
        $exibeUsuario = $consulta->fetch(PDO::FETCH_ASSOC);

        if($exibeUsuario['statusUsu'] == 0){
            $_SESSION['ID'] = $exibeUsuario['codUsuario'];
            $_SESSION['Status']=0;
            header('location:index.php');
        }else{
            $_SESSION['ID'] = $exibeUsuario['codUsuario'];
            $_SESSION['Status']=1;
            header('location:index.php');
        }

    }else{
        header('location:erro.php');
    }

?>
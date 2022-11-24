<?php
    include 'conexao.php';
    $nome = $_POST['name'];
    $email = $_POST['Email'];
    $senha = $_POST['password'];
    $cep = $_POST['cep'];
    $cidade = $_POST['cidade'];
    $endereco = $_POST['endereco'];

    $consulta = $cn->query("select email from usuario where email = '$email'");
    $exibe = $consulta ->fetch(PDO::FETCH_ASSOC);

    if($consulta->rowCount() == 1){
        header('location:erroInserir.php');
    }
    else{
        $incluir = $cn->query("insert into usuario(nomeUsuario, email, senha, statusUsu, endereco, cidade, cep)
        values('$nome', '$email', '$senha', '0', '$endereco', '$cidade', '$cep')");
        header('location:ok.php');
    }
?>
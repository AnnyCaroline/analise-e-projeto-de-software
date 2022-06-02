<?php
    include('connection.php');

    $user = mysqli_real_escape_string($conexao, $_POST['user']);
    $password = mysqli_real_escape_string($conexao, $_POST['password']);

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $query = "insert into usuario (usuario, senha) VALUES('{$user}', '{$passwordHash}')";

    $result = mysqli_query($conexao, $query);

    header('Location: index.php');
?>
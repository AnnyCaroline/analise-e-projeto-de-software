<?php
    session_start();
    include('connection.php');

    if (empty($_POST['user']) || empty($_POST['password'])) {
        header('Location: index.php');
        exit();
    }

    $user = mysqli_real_escape_string($conexao, $_POST['user']);
    $password = mysqli_real_escape_string($conexao, $_POST['password']);

    $query = "select id, usuario, senha from usuario where usuario = '{$user}'";
    $result = mysqli_query($conexao, $query);

    $num_rows = mysqli_num_rows($result);

    if ($num_rows == 1) {
        $row = mysqli_fetch_row($result);

        $existingHashFromDb = $row[2];
        $isPasswordCorrect = password_verify($password, $existingHashFromDb);

        if ($isPasswordCorrect) {
            $_SESSION['user'] = $user;
            header('Location: main.php');
            exit();
        }
    }

    echo 'Usuário ou senha incorretos';
    exit();
?>
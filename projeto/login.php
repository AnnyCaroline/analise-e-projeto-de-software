<?php
    define('HOST', '127.0.0.1');
    define('USER', 'root');
    define('PASSWORD', '');
    define('DB', 'my-login');
    
    $conexao = mysqli_connect(HOST, USER, PASSWORD, DB) or die ('Não foi possível conectar');

    echo $_POST['user'];
?>
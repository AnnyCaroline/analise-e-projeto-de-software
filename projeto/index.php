<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title>My project</title>
</head>
<body>
    <div class="centralize-container">
        <div class="login-container">
            <h1> My project </h1>

            <div class="card">
                <form action="login.php" method="POST">
                    <input name="user" type="text" placeholder="Seu usuário" autofocus />
                    <input name="password" type="password" placeholder="Sua senha" />
                    <button type="submit">
                        Entrar
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
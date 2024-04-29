<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            Usuário:
            <input type="text" id="username" name="username" ><br><br>

            Senha:
            <input type="password" id="password" name="password" ><br><br>

            <button type="submit" name="submit">Entrar</button>
        </form>
        <?php
            // Arquivo alterado para commit
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
                if (isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])) {

                    $usuario_valido = "admin";
                    $senha_valida = "senha123";

                    if ($_POST['username'] == $usuario_valido && $_POST['password'] == $senha_valida) {
                        echo "<p>Login bem-sucedido! Bem-vindo, {$_POST['username']}.</p>";
                    } else {
                        echo "<p>Usuário ou senha inválidos.</p>";
                    }
                } else {
                    echo "<p>Por favor, preencha todos os campos.</p>";
                }
            }
        ?>
    </body>
</html>


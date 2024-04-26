
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> </title>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="username">Usuário:</label>
    <input type="text" id="username" name="username" required>
    <br><br>

    <label for="password">Senha:</label>
    <input type="password" id="password" name="password" required>
    <br><br>
    <button type="submit" name="submit">Entrar</button>
</form>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username'])
        && isset($_POST['password']) 
        && !empty($_POST['username']) 
        && !empty($_POST['password'])) {

        $usuario_valido = "admin";
        $senha_valida = "123456";

        if ($_POST['username'] == $usuario_valido 
        && $_POST['password'] == $senha_valida) {
            echo "<p>Login bem-sucedido! Bem-vindo, {$_POST['username']}.</p>";
        } 
    }
}
?>
</body>
</html>


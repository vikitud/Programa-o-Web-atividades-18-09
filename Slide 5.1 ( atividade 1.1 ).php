// esse daqui é do pra cadastrar o usuário

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h2>Cadastro de Usuário</h2>
    <form method="post" action="">
        Nome: <input type="text" name="nome" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>

<?php
if(isset($_POST['nome']) && isset($_POST['email'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $arquivo = 'usuarios.json';
    if(file_exists($arquivo)) {
        $json = file_get_contents($arquivo); 
        $usuarios = json_decode($json, true); 
    } else {
        $usuarios = [];
    }
    $usuarios[] = [
        'nome' => $nome,
        'email' => $email
    ];
    file_put_contents($arquivo, json_encode($usuarios));
    header('Location: lista_usuarios.php');
    exit;
}
?>


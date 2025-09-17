//Esse daqui é pra listar os usuários cadastrados, que se liga com o primeiro la ( o 1.1 )

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuários</title>
</head>
<body>
    <h2>Lista de Usuários</h2>
    <?php if(count($usuarios) > 0): ?>
        <ul>
            <?php foreach($usuarios as $usuario): ?>
                <li>Nome: <?php echo $usuario['nome']; ?> - Email: <?php echo $usuario['email']; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Nenhum usuário cadastrado ainda.</p>
    <?php endif; ?>
    <a href="cadastro.php">Cadastrar Novo Usuário</a>
</body>
</html>

<?php
$arquivo = 'usuarios.json';
if(file_exists($arquivo)) {
    $json = file_get_contents($arquivo);
    $usuarios = json_decode($json, true);
} else {
    $usuarios = [];
}
?>


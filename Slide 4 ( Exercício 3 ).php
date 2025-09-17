<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeProcurado = $_POST["nome"];
    function verificarNome($nome) {
        $lista = ["Ana", "Bruno", "Carlos", "Maria", "João"];
        if (in_array($nome, $lista)) {
            return "O nome $nome foi encontrado na lista.";
        } else {
            return "O nome $nome não consta na lista.";
        }
    }
    echo "<h2>Resultado</h2>";
    echo verificarNome($nomeProcurado);
    echo '<p><a href="verifica_nome.php">Voltar</a></p>';
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Verificar Nome na Lista</title>
</head>
<body>
    <h2>Digite um nome para verificar</h2>
    <form method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
        <input type="submit" value="Verificar">
    </form>
</body>
</html>

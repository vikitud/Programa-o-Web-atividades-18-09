<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabuada com Arquivo</title>
</head>
<body>
    <h2>Gerar Tabuada e Salvar em Arquivo</h2>
    <form action="tabuada.php" method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" id="numero" required>
        <input type="submit" value="Calcular Tabuada">
    </form>
</body>
</html>

<?php
$numero = $_POST["numero"];
$arquivo = "tabuada.txt";
function gerarTabuada($n) {
    $resultado = "";
    for ($i = 1; $i <= 10; $i++) {
        $linha = "$n x $i = " . ($n * $i) . "\n";
        $resultado .= $linha;
    }
    return $resultado;
}
$tabuada = gerarTabuada($numero);
file_put_contents($arquivo, $tabuada);
echo "<h3>Tabuada do $numero</h3>";
echo "<pre>" . htmlspecialchars(file_get_contents($arquivo)) . "</pre>";
echo "<a href='tabuada.html'>Voltar</a>";
?>

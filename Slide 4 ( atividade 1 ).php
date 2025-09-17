<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $disciplina = $_POST["disciplina"];
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];
    function calcularMedia($n1, $n2, $n3) {
        return ($n1 + $n2 + $n3) / 3;
    }
    $media = calcularMedia($nota1, $nota2, $nota3);
    echo "<h2>Resultado</h2>";
    echo "Nome: $nome <br>";
    echo "Disciplina: $disciplina <br>";
    echo "Média: " . number_format($media, 2, ",", ".") . "<br>";
    echo '<p><a href="media.php">Voltar</a></p>';
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cálculo de Média</title>
</head>
<body>
    <h2>Calcular Média do Aluno</h2>
    <form method="post">
        Nome: <input type="text" name="nome" required><br><br>
        Disciplina: <input type="text" name="disciplina" required><br><br>
        Nota 1: <input type="number" step="0.01" name="nota1" required><br><br>
        Nota 2: <input type="number" step="0.01" name="nota2" required><br><br>
        Nota 3: <input type="number" step="0.01" name="nota3" required><br><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>

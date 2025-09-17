<?php
$arquivo = "frases.txt";
if (file_exists($arquivo)) {
    $conteudo = file_get_contents($arquivo);
    echo "<h2>Conteúdo do arquivo:</h2>";
    echo nl2br($conteudo);
} else {
    echo "O arquivo '$arquivo' não existe!";
}
?>

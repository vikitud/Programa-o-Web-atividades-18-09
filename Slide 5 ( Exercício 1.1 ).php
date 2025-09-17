<?php
$arquivo = "frases.txt";
$frases = "Primeira frase.\nSegunda frase.\nTerceira frase.";
$fp = fopen($arquivo, "w");
fwrite($fp, $frases);
fclose($fp);
echo "Arquivo '$arquivo' criado e frases gravadas com sucesso!";
?>

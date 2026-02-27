<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua forma</title>
</head>

<body>
    <?php
    $pforma = $_POST['formas'];
    $pcor = $_POST['cores'];
    $pnum = $_POST['num'];

    // Ajustei para buscar dentro da pasta 'fotos' e com um underline entre forma e cor
    // Exemplo: fotos/quadrado_vermelho.png
    $pfotos = "fotos/" . $pforma . $pcor . ".png";

    for ($a = 1; $a <= $pnum; $a++) {
        echo "<img src='$pfotos' style='width:100px; margin:5px;'>";
    }
    ?>
    <br>
    <a href="index.php">Voltar</a>
</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolha sua forma e cor</title>
</head>

<body>
    <h1>Escolha sua forma</h1>
    <form action="exibir.php" method="POST">
        <select name="formas">
            <option value="quadrado">Quadrado</option>
            <option value="circulo">Círculo</option>
            <option value="retangulo">Retângulo</option>
        </select>

        <h1>Escolha sua cor</h1>
        <select name="cores">
            <option value="vermelho">Vermelho</option>
            <option value="azul">Azul</option>
            <option value="verde">Verde</option>
        </select>

        <h1>Escolha quantas vezes a imagem vai aparecer</h1>
        <select name="num">
            <?php
            for ($x = 1; $x <= 10; $x++) {
                echo "<option value='$x'>$x</option>";
            }
            ?>
        </select>
        <br><br>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>
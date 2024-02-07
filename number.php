<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>numeros</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav><h2>Informe os números:</h2></nav>
    <main>
    <form method="POST" action="result.php">
        <div class="inserir" >
            <label for="numeroMenor">Numero Menor:</label>
            <input type="number" class="numero" id="numeroMenor" name="numeroMenor" required>
        </div>

        <div class="inserir">
            <label for="numeroMaior">Numero Maior:</label>
            <input type="number" class="numero" id="numeroMaior" name="numeroMaior" required>
        </div>

        <input type="submit" class="botao" >
    </form>
</main>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Soma</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="resultado">
        <?php
       
        $numeroMenor = $_POST['numeroMenor'];
        $numeroMaior = $_POST['numeroMaior'];

       if ($numeroMenor>$numeroMaior){
       
        $termos =  $numeroMaior - $numeroMenor + 1 ;
        $soma = ($termos * ($numeroMenor + $numeroMaior)) / 2;
        $termoVerdadeiro= $numeroMenor  - $numeroMaior + 1 ;
        $somaVerdadeira=($termoVerdadeiro * ( $numeroMaior+ $numeroMenor)) / 2;
       echo "Houve um erro na sua resposta, o numero $numeroMenor é maior que o numero $numeroMaior ";
        echo "A soma de todos os números dos dois valores é ", $soma;
        echo " Mas da maneira correta é ",$somaVerdadeira;
    }
 else {
    $termos =  $numeroMaior - $numeroMenor + 1;
    $soma = ($termos * ($numeroMenor + $numeroMaior)) / 2;

   
    echo "A soma de todos os números dos dois valores é ", $soma;
    }
        ?>
        
    </div>
    <div class="voltar"><a href="index.php"><Button class="botao">Voltar</Button></a></div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <?php 
    $numero=1437.25;
    $numeri='R$' . number_format($numero, 2, ',', '.');
    $data = date("y:m:d");
    $dataReal=date('d/m/Y', strtotime($data));
    echo "<nav><a href='' ';>Numeros</a> <a href='number.php'>site2</a></nav>";
    echo "<div>$numeri</div>";
    echo "<div>$dataReal</div>";    
    ?>
</body>
</html>
<?php
$dorama1 = trim($_GET["ndorama1"]);
$dorama2 = trim($_GET["ndorama2"]);
$dorama3 = trim($_GET["ndorama3"]);
$dorama4 = trim($_GET["ndorama4"]);
$dorama5 = trim($_GET["ndorama5"]);


// Validação dos campos: há algo? É nulo.
if ($dorama1 == null || $dorama2 == null || $dorama3 == null || $dorama4 == null || $dorama5 == null) {
    echo "Valores vazios";
} else if (
    strlen($dorama1) < 2 || strlen($dorama2) < 2 ||
    strlen($dorama3) < 2 || strlen($dorama4) < 2 ||
    strlen($dorama5) < 2
) {
    echo "Um nome precisa ter no mínimo 2 caracteres.";
} else {

    // Criação de array com valores
    $doramas = array($dorama1, $dorama2, $dorama3, $dorama4, $dorama5);

    sort($doramas); // Ordena o array em ordem alfabética
    
    $listagemDoramas = "";

    for ($i = 0; $i < count($doramas); $i++) {
        $listagemDoramas .= "<li>" . ($doramas[$i]) . "</li>";
    }

}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Doramas</title>
     <link rel="stylesheet" href="./../css/style.css">
</head>

<body>

    <h1> Resultado da Listagem de Doramas</h1>

    <h2>Assistidos em 2025</h2>

    <ul>
        <?php echo $listagemDoramas; ?>
    </ul>


</body>

</html>
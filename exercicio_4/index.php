<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $lista = array();
        $lista[1] = 'Huciano Lulk';
        $lista[] = 'Ronaldinhooo';
        $lista[] = 'Messisimessi';
        $lista[] = 'Neymaresiaaa';
        $saida = '<table border="1">';
        foreach($lista as $indice => $nome){
            $saida = $saida . '<tr><td>' . $indice . '</td><td>' . $nome . '</td>';
        }
        $saida = $saida . '</table>';
        echo "<h1>Resultado do Relatório:</h1>" . $saida;

    ?>
</body>
</html>
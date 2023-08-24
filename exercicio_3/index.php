<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $datetime = new DateTime("now", new DateTimeZone("America/Sao_Paulo"));
      $hora = $datetime -> format('G');
      //$hora = 19;
      $answer = "<h1>Bom dia!</h1>";
      $imagem = '<img src="./bom_dia.jpg" alt="BOM DIA!!!!!!">';
      if ($hora >= 18){
        $answer = "<h1>Boa noite!</h1>";
        $imagem = '<img src="./boa_noite.jpg" alt="BOA NOITE!!!!!!">';
      } elseif ($hora > 12){
        $answer = "<h1>Boa tarde!</h1>";
        $imagem = '<img src="./boa_tarde.jpg" alt="BOA TARDE!!!!!!">';
      };
      echo $answer.'<br>'.$imagem;
    ?>
    
</body>
</html>
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
      $hora = 19;
      $answer = "<h1>Bom dia!</h1>";
      $imagem = '<img src="https://i.ytimg.com/vi/yu6rHJgs71k/maxresdefault.jpg" alt="BOM DIA!!!!!!">';
      if ($hora >= 18){
        $answer = "<h1>Boa noite!</h1>";
        $imagem = '<img src="https://cdn.panrotas.com.br/portal-panrotas-statics/media-files-cache/190410/5480d73bab1e2ba9996c245f72eab943foto1sergebrunier/0,25,700,418/670,400,0.91/0/default.jpg" alt="BOA NOITE!!!!!!">';
      } elseif ($hora > 12){
        $answer = "<h1>Boa tarde!</h1>";
        $imagem = '<img src="https://imagens.climatempo.com.br/img_users/2015/07/af091d14d32633fdc3c0c82e3671757a/656x0.jpg" alt="BOA TARDE!!!!!!">';
      };
      echo $answer.'<br>'.$imagem;
    ?>
    
</body>
</html>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="dark" />
        <!-- Centered viewport --> 
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
/>
  </head>
  <body>
  <main class="container" style="margin:auto">
      <h1>Hello world!</h1>
      
      <?php
        //inese a la api por la url
            $url = 'https://whenisthenextmcufilm.com/api';

            // Realizar la solicitud GET
            $response = file_get_contents($url);

            // Decodificar la respuesta JSON
            $datos = json_decode($response, true);


?>

<article>
    <img src="https://image.tmdb.org/t/p/w500/ajnzOECvXpa7VcVx0RSlq39XgHe.jpg" alt="">
    <h1><?php


?></h1>
<?php
echo ($datos['title']);
?>
</article>

    </main>
  </body>
</html>

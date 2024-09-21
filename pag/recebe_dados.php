
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../css/cadastro.css">
</head>
<body>

<div class="coment";>
      <div class ="comentario1";>
        <?php
        if(isset($_POST["comentario"])){
        $comentario = $_POST["comentario"];
        echo "<h2>Comentaro 1</h2>";
        echo "Comentario: $comentario <br>";
        }
        ?>   
         </div>
</div>

</body>
</html>
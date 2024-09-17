<?php
if(isset($_POST["nome"]) or isset ($_POST["comentario"])){
        $nome = $_POST["nome"];
        $comentario = $_POST["comentario"];
echo "<h2>Dados recebidos com sucesso!</h2>";
echo "Usuário: $nome <br>";
echo "Comentario: $comentario <br>";
}
?>
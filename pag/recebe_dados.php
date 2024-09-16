<?php
if(isset($_POST["nome"]) or isset($_POST["email"])){
        $nome = $_POST["nome"];
        $email = $_POST["email"];
echo "<h2>Dados recebidos</h2>";
echo "Usuário: $nome <br>";
echo "E-Mail: $email <br>";
}
?>
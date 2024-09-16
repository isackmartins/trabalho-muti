<?php
if(isset($_POST["nome"]) or isset($_POST["email"]) or isset($_POST["telefone"]) or isset($_POST["endereco"])){
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $endereco = $_POST["endereco"];
echo "<h2>Dados recebidos com sucesso!</h2>";
echo "Usuário: $nome <br>";
echo "E-Mail: $email <br>" ;
echo "Telefone: $telefone <br>";
echo "Endereço: $endereco";
}
?>
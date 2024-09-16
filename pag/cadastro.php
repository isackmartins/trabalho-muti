<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/sobre.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <nav>
            <div class="logo">
                <span><img src="../img/image-removebg-preview.png" alt=""></span>
            </div>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li> <a href="">Feedback</a></li>
                <li> <a href="sobrenos.html">Sobre Nós</a></li>
            </ul>
        </nav>
    </div>

    <h1> Cadastro de contato</h1>
     <form name="cadastro" action="recebe_dados.php" method="post">
            Nome: <input type="text" name="nome"><br>
            E-mail:<input type="text" name="email"><br>
            Telefone: <input type="text" name="telefone"><br>
            Endereço: <input type="text" name="endereco">
    <input type="submit" value="Envidar dados">
    </form>
        <?php  include_once(recebedados)?>
    <footer class="footer">
        <div class="social">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
        <ul>
            <li><a href="index.html">Home</a></li>            
            <li><a href="#">Feedback</a></li>
            <li> <a href="sobrenos.html">Sobre Nós</a></li>
        </ul>
        <p class="copyright">2024 designed by: Isack Martins e Guilherme bosso</p>

    </footer>

</body>

</html>

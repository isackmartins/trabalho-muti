<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/cadastro.css">
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
                <li> <a href="#">Feedback</a></li>
                <li> <a href="sobrenos.html">Sobre Nós</a></li>
            </ul>
        </nav>
    </div>


    <form id="commentForm">
        <textarea id="comment" rows="4" required placeholder="Digite seu comentário..."></textarea>
        <br>
        <button type="submit">Enviar</button>
    </form>


    <div id="commentsContainer"></div>

    <?php
// Define o caminho para o arquivo de comentários
$file = 'comments.txt';

// Recebe o comentário
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $comment = htmlspecialchars($_POST['comment']); // Sanitiza o comentário

    // Adiciona o comentário ao arquivo
    file_put_contents($file, $comment . PHP_EOL, FILE_APPEND);
}
?>



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
    <script>
        document.getElementById('commentForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const comment = document.getElementById('comment').value;

            fetch('cadastro.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `comment=${encodeURIComponent(comment)}`
            })
            .then(response => response.text())
            .then(data => {
                document.getElementById('comment').value = ''; // Limpa o campo
                loadComments(); // Recarrega os comentários
            });
        });

        function loadComments() {
            fetch('recebe_dados.php')
                .then(response => response.json())
                .then(data => {
                    const commentsContainer = document.getElementById('commentsContainer');
                    commentsContainer.innerHTML = ''; // Limpa os comentários antigos

                    data.forEach(comment => {
                        const div = document.createElement('div');
                        div.className = 'comment';
                        div.textContent = comment;
                        commentsContainer.appendChild(div);
                    });
                });
        }

        // Carrega comentários ao iniciar
        loadComments();
    </script>


</body>

</html>

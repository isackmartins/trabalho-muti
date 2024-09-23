
<?php
// Define o caminho para o arquivo de comentários
$file = 'comments.txt';

// Lê os comentários do arquivo
$comments = file($file, FILE_IGNORE_NEW_LINES);

// Retorna os comentários em formato JSON
header('Content-Type: application/json');
echo json_encode($comments);
?>
<?php

$nome = $_POST['nome'];
$turma = $_POST['optturma'];
$mensagem = $_POST['mensagem'];

echo "<h1>Comentário</h1>";
echo "<p>Nome: $nome </p>";
echo "<p>Turma: $turma </p>";
echo "<p>Mensagem: $mensagem </p>";

$sql = "insert into comentarios
            (nome, turma, comentario)
        values
            ('$nome', '$turma', '$mensagem')";

echo $sql;

$conexao = new PDO('mysql:host=127.0.0.1;dbname=pessoal','root','');
$conexao->exec($sql);

echo "<h2>Recado gravado com sucesso</h2>";

?>
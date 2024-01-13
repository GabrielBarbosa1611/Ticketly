<?php
session_start();
if (isset($_POST['submit']) && !empty($_POST['nome1']) && !empty($_POST['senha1'])) {
    include_once('conexaobanco.php');
    $nome1 = $_POST['nome1']; //o usuario ira fornecer o "nome1" e a "senha1" e eles vao ser iguais a variavel "nome1" e "senha1" que posteriomente seram verificadas se estao no BD
    $senha1 = $_POST['senha1'];


    $sql = "SELECT * FROM usuarios WHERE nome_usuario = '$nome1' and senha_usuario ='$senha1'"; // verifica se a variavel "nome1" e "senha1" existem no BD
    $result = $conexao->query($sql);


    if (mysqli_num_rows($result) < 1) {
        unset($_SESSION['nome']);
        unset($_SESSION['senha']);

        header('Location: cadastro.php');
    } else {
        $_SESSION['nome'] = $nome1;
        $_SESSION['senha'] = $senha1;

        header('Location: eventos/2/telainicial2.php');
    }
} else {
    header('Location: cadastro.php');
}

<?php
include "../scripts/conexao.php";

if(empty($_POST['user']) || empty($_POST['password'])) {
    header('Location: ../index.php');
    exit();
}

$usuario = mysqli_real_escape_string($conn, $_POST['user']);
$senha = mysqli_real_escape_string($conn, $_POST['password']);

$sql = "SELECT * from usuarios WHERE login = '{$usuario}' and senha = '{$senha}'";

$result = mysqli_query($conn, $sql);

$linha = mysqli_num_rows($result);

if($linha == 1) {
    $_SESSION['user'] = $usuario;
    header('Location: home.php');
    exit();
} else {
    header('Location: ../index.php');
    exit();
}
?>
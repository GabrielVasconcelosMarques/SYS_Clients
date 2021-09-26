<?php
include "../scripts/conexao.php";

session_destroy();
header('Location: ../index.php');
?>
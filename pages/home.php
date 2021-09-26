
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/cadastroForms.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <title>Home</title>
</head>
    <header>
        <nav>
            <ul id="menu">
                <li id="logo">SYS Clients</li>
                <li><a href="home.php" id="home">Home</a></li>
                <li><a href="../scripts/login/logout.php" id="exit">Sair</a></li>
            </ul>
        </nav>
    </header>
    <div id="content">
        <aside>
            <img src="../assets/user_person.png" id="perfil" alt="Foto de perfil">
            <a href="cadastroCliente.php" id="optionsBtn">Cadastrar cliente</a>
            <a href="consultaTodosClientes.php" id="optionsBtn">Consultar clientes</a>
            <a href="alterarOuRemoverCliente.php" id="optionsBtn">Alterar / Remover cliente</a>
        </aside>
        <main>

        <strong>Home</strong>
        <div id="cards">
            <div id="clientes" class="infos">
                <img src="../assets/cliente.png" id="logoCliente" alt="Logotipo de cliente cadastrado">
                <p>Clientes cadastrados no sistema: </p>
                <?php
                    include "../scripts/conexao.php";

                    $sql = "SELECT count(*) AS quanti FROM clientes";

                    $quant_clientes = mysqli_query($conn, $sql);

                    $quant = mysqli_fetch_assoc($quant_clientes);

                    echo "<h1 style='font-size: 150px; font-family: sans-serif';>";
                    echo $quant['quanti'];
                    echo "</h1>";

                ?>
                <p class="dados">
                </p>
            </div>
        </div>
    </main>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/cadastroForms.css">
    <link rel="stylesheet" href="../styles/mensagem.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <title>Editar cliente</title>
</head>
    <header>
        <nav>
            <ul id="menu">
                <li id="logo">SYS Clients</li>
                <li><a href="home.php" id="home">Home</a></li>
                <li><a href="logout.php" id="exit">Sair</a></li>
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
        <strong>Editar cliente</strong>
        <div id="content_main">
            <?php
                include "../scripts/conexao.php";

                $cpf = $_POST["id"];
                $nome = strtoupper($_POST["nameCliente"]);
                $email = strtoupper($_POST["emailCliente"]);
                $telefone = $_POST["telefoneCliente"];
                $cep = $_POST["cepCliente"];
                $bairro = strtoupper($_POST["bairroCliente"]);
                $cidade = strtoupper($_POST["cidadeCliente"]);
                $rua = strtoupper($_POST["ruaCliente"]);
                $numero = strtoupper($_POST["numCliente"]);

                $sql = "UPDATE `clientes` SET `nome` = '$nome', `email` = '$email', `telefone` = '$telefone', `cep` = '$cep', `bairro` = '$bairro', `cidade` = '$cidade', `rua` = '$rua', `numero` = '$numero' WHERE `cpf` = '$cpf'";

                if(mysqli_query($conn, $sql)){
                    print('<div class="alerta sucesso">Cliente editado com sucesso</div>');
                } else {
                    print('<div class="alerta atencao">Houve um erro ao tentar editar o cliente</div>');
                }
            ?>
            
        </div>
    </main>
    </div>
    <script src="../scripts/cep.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#cpfCliente").mask("999.999.999-99");
            $("#telefoneCliente").mask("(99)99999-9999");
            $("#cepCliente").mask("99999-999");
        });
    </script>
</body>
</html>
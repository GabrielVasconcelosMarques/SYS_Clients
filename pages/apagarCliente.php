
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
    <title>Edição de cliente</title>
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

        <?php
                include "../scripts/conexao.php";

                $id = $_GET["id"] ?? '';

                $sql = "DELETE FROM clientes WHERE cpf = '$id'";

                $dados = mysqli_query($conn, $sql);
                
                
        ?>
        
    <main>
        <strong>Editar cliente</strong>
        <div id="content_main">
            <?php
                print('<div class="alerta sucesso">Cliente excluído com sucesso</div>');
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
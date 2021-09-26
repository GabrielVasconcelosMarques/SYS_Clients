
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/cadastroForms.css">
    <link rel="stylesheet" href="../styles/tabela.css">
    <link rel="stylesheet" href="../styles/mensagem.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <title>Cadastro de cliente</title>
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
        <strong>Consulta de clientes em geral</strong>
        <div id="content_main">
            <?php
                include "../scripts/conexao.php";

                $sql = "SELECT * FROM clientes";

                $dados = mysqli_query($conn, $sql);

                while($linha = mysqli_fetch_assoc($dados)){
                    $cpf = $linha["cpf"];
                    $nome = $linha["nome"];
                    $email = $linha["email"];
                    $telefone = $linha["telefone"];
                    $cep = $linha["cep"];
                    $bairro = $linha["bairro"];
                    $cidade = $linha["cidade"];
                    $rua = $linha["rua"];
                    $numero = $linha["numero"];


                    echo
                                "<section>
                                    <div class='tbl-content'>
                                        <table cellpadding='0' cellspacing='0' border='0'>
                                            <tbody>
                                                <tr>
                                                    <th>CPF</th>
                                                    <th colspan='2'>NOME</th>
                                                    <th>E-mail</th>
                                                    <th>Telefone</th>
                                                </tr>
                                                <tr>
                                                    <td>$cpf</td>
                                                    <td colspan='2'>$nome</td>
                                                    <td>$email</td>
                                                    <td>$telefone</td>
                                                </tr>
                                                <tr>
                                                    <th>CEP</th>
                                                    <th>BAIRRO</th>
                                                    <th>CIDADE</th>
                                                    <th>RUA</th>
                                                    <th>NÚMERO</th>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td>$cep</td>
                                                    <td>$bairro</td>
                                                    <td>$cidade</td>
                                                    <td>$rua</td>
                                                    <td>$numero</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                            ";
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

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
        <strong>Cadastro de cliente</strong>
        <div id="content_main">
            
            <form action="inserirCliente.php" method="POST">
                <fieldset>
                    <div class="field">
                        <label for="nameCliente">Nome do Cliente</label>
                        <input type="text" name="nameCliente" id="" required>
                    </div>
                    
                    <div class="field-group">
                        <div class="field">
                            <label for="cpfCliente">CPF</label>
                            <input type="text" name="cpfCliente" id="cpfCliente" placeholder="000.000.000-00"  required>
                        </div>


                        <div class="field">
                            <label for="emailCliente">E-mail</label>
                            <input type="text" name="emailCliente" id="emailCliente" placeholder="exampe@gmail.com" required>
                        </div>

                        <div class="field">
                            <label for="telefoneCliente">Telefone</label>
                            <input type="text" name="telefoneCliente" id="telefoneCliente" placeholder="(00)00000-0000" required>
                        </div>
                    </div>
                    
                    <div class="field-group">
                        <div class="field">
                            <label for="cepCliente">CEP</label>
                            <input type="text" name="cepCliente" id="cepCliente" placeholder="00000-000" required>
                            <button id="consultar">Consultar CEP</button>
                        </div>

                        <div class="field">
                            <label for="bairroCliente">Bairro</label>
                            <input type="text" name="bairroCliente" id="bairroCliente" required>
                        </div>

                        <div class="field">
                            <label for="cidadeCliente">Cidade</label>
                            <input type="text" name="cidadeCliente" id="cidadeCliente" required>
                        </div>
                    </div>
                    
                    <div class="field-group">
                        <div class="field">
                            <label for="ruaCliente">Rua</label>
                            <input type="text" name="ruaCliente" id="ruaCliente" required>
                        </div>

                        <div class="field">
                            <label for="numCliente">N??mero</label>
                            <input type="text" name="numCliente" id="numCliente" required>
                        </div>
                    </div>
                    
                </fieldset>

                <button id="cadastrar" type="submit">Cadastrar</button>
            </form>
            
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
<h1 align="center">Desafio SYS Manager</h1>

## Sobre
Sistema web frontend e backend que foi desenvolvido para seleção de estágio da empresa SYS Manager. Foram criadas telas de login, home, cadastro de cliente, consulta de clientes e alteração / remoção de clientes. Dentro da opção de alterar / remover cliente, o usuário busca o cliente pelo seu cpf e pode editar ou remover aquele cliente.

---

## Tecnologias utilizadas
Foram utilizadas as seguintes tecnologias:
- Javascript (Consumindo API do viacep: https://viacep.com.br)
- PHP
- MySQL
- PHP
- XAMPP Control Panel
- HTML
- CSS

---

## Como instalar e executar
```bash
# Clonar este repositório ou fazer download do projeto

# Ter o XAMPP Control Panel instalado

# Acessar o XAMPP, que será o servidor para trabalhar com o banco de dados mysql e o backend em PHP.

#Colar o projeto dentro da pasta htdocs do XAMPP no caminho: 
C:\xampp\htdocs

```
####Pressionar START no mysql e no apache
<img src="https://i.imgur.com/lzyGoTB.png">

####Acessar o endereço no navegador:
http://localhost/projeto%20sys/index.php



---

## Diferenciais utilizados
- Tratamento de erros na inserção de cpf, telefone e cep, impedindo que o usuário digite letras ao invés de números ou ultrapasse o limite de caracteres solicitado para cada.
- Tratamento de erros caso o usuário insira um cpf ja cadastrado, tratamento de erro caso o usuário busque por um cpf que não exista cadastrado.
- Sistema de login e logout com inserção de usuário e senha; login: adm, senha: 1234
- Caso o usuário tente acessar a pagina de login sem preencher usuário e senha, será redirecionado para tela de login.
- Todo css separado para ser chamado especificamente quando aquele bloco estiver em uso, melhorando a performance do sistema.
- Código limpo e identado, separado por blocos de script, assets, styles e pages, dando uma melhor organização ao código.

---

## Screenshots
#### Tela de login
<img src="https://i.imgur.com/dLiWyaW.jpg">

#### Tela de Home
<img src="https://i.imgur.com/NzimTpR.jpg">

#### Tela de Cadastro de cliente
<img src="https://i.imgur.com/TFgyiTk.jpg">

#### Tela de cliente cadastrado com sucesso
<img src="https://i.imgur.com/y7aa8m2.jpg">

#### Tela de prevenção de erro para um cpf que já tenha cadastrado no sistema"
<img src="https://i.imgur.com/kHR0lZE.jpg">

#### Tela consulta de clientes em geral
<img src="https://i.imgur.com/O8yRXHF.jpg">

#### Tela mostrando todos os clientes sendo retornados do banco de dados
<img src="https://i.imgur.com/mLqzE4p.jpg">

#### Tela de detalhes (para realizar edição ou remoção do cliente no sistema)
<img src="https://i.imgur.com/zjVX7NT.jpg">

#### Tela de detalhes quando o usuário busca por um CPF cadastrado no sistema
<img src="https://i.imgur.com/aLkjArW.jpg">

#### Tela de detalhes quando o usuário busca por um CPF que não está cadastrado no sistema
<img src="https://i.imgur.com/V6i29h1.png">

#### Tela de detalhes quando o usuário opta por editar aquele cliente
<img src="https://i.imgur.com/VniJDDn.jpg">

#### Tela de cliente editado com sucesso
<img src="https://i.imgur.com/AFFQJAF.jpg">

#### Tela de detalhes quando o usuário opta por remover aquele cliente
<img src="https://i.imgur.com/buekmEC.jpg">


---

## Author
Gabriel Vasconcelos Marques


---

## Agradecimento
Agradeço a SYS Manager pela oportunidade de participar desta incrível etapa de seleção.

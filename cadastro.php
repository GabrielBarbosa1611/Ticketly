<?php 
if(isset($_POST['submit1']))
{
     include_once('conexaobanco.php');
     
     $email = $_POST['email'];
     $nome = $_POST['nome'];
     $senha = $_POST['senha'];
     
     
     $result = mysqli_query($conexao, "INSERT INTO usuarios(email_usuario,nome_usuario,senha_usuario) VALUES('$email','$nome','$senha')");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Cadastro</title>
</head>
<body>
     <!-- navbar -->
     <header class="header">

        <a href="#" class="logo">
            <img src="eventos/Fotos/ticketlylogo.png" alt="">
        </a>

        <nav class="navbar">
            <a href="eventos/1/telainicial1.html">início</a>
            <a href="eventos/1/teatro1.html">teatro</a>
            <a href="eventos/1/shows1.html">shows</a>
            <a href="eventos/1/standup1.html">stand up</a>
            <a href="eventos/1/workshops1.html">workshops</a>
            <a href="eventos/1/diversos1.html">diversos</a>
        </nav>

    
        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>

        <div class="search-box">
            <input class="search-txt" type="text" name="" placeholder="Pesquise...">
            <div class="suggestions"></div>
            <a class="search-btn" href="#">
                <i class="fas fa-search"></i>
            </a>
        </div>

        <div class="wrapper">
            <a href="#" class="cadastro"><span>cadastrar</span></a>
        </div>

    </header>
    <!-- fim da navbar -->
    <div class="tudo">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="cadastro()">Login</button>
                <button type="button" class="toggle-btn" onclick="login()">Cadastro</button>
            </div>
                <div class="icone"><img src="eventos/Fotos/ticketlylogo.png" alt="2"></div>
            <br><br><br><br>

            <form id="login" class="input-group" action="testelogin.php" method="POST">
                <input type="text" class="input-field" name="nome1" placeholder="Nome do Usuário" required>
                <input type="password" name="senha1" class="input-field" placeholder="Digite a Senha" required>
                <input type="checkbox" class="check-box"><span class="termos">Lembrar Senha</span>
                <button type="submit" name="submit" class="submit-btn" value="logar">Login</button>
            </form> 
            <form id="cadastro" class="input-group" action="cadastro.php" method="POST">
                <input type="text" name="nome" class="input-field" placeholder="Nome do Usuário" required>
                <input type="email" name="email" class="input-field" placeholder="Email do Usuário" required>
                <input type="password" name="senha" class="input-field" placeholder="Digite a Senha" required>
                <input type="checkbox" class="check-box"><span class="termos">Eu concordo com os termos e serviços</span>
                <button type="submit" name="submit1" class="submit-btn">Cadastrar</button>
            </form>
            <div class="register-link" id="registre" onclick="registro()">
                <p>Ainda não possui conta?
                <a href="#">Registre-se</a></p>
            </div>
            <div class="login-link" id="logue" onclick="logar()">
                <p>Já possui uma conta?
                <a href="#">Faça Login</a></p>
            </div>
            
        </div>
    </div>
    <footer>
        <div id="footer_content">
            <div id="footer_contacts">
                <h1>Ticketly</h1>
                <p>Onde mais nos encontrar.</p>

                <div id="footer_social_media">
                    <a href="#" class="footer-link" id="instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <a href="#" class="footer-link" id="twitter">
                        <i class="fa-brands fa-twitter"></i>
                    </a>

                    <a href="#" class="footer-link" id="whatsapp">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>
            
            <ul class="footer-list">
                <li>
                    <h3>Eventos</h3>
                </li>
                <li>
                    <a href="eventos/1/shows1.html" class="footer-link">Shows</a>
                </li>
                <li>
                    <a href="eventos/1/teatro1.html" class="footer-link">Teatro</a>
                </li>
                <li>
                    <a href="eventos/1/workshops1.html" class="footer-link">Workshops</a>
                </li>
                <li>
                    <a href="eventos/1/standup1.html" class="footer-link">Stand up</a>
                </li>
                <li>
                    <a href="eventos/1/diversos1.html" class="footer-link">Diversos</a>
                </li>
            </ul>

            <ul class="footer-list">
                <li>
                    <h3>Ajuda</h3>
                </li>
                <li>
                    <a href="#" class="footer-link">Compradores & Participantes</a>
                </li>
            </ul>

            <div id="footer_subscribe">
                <h3>Inscreva-se</h3>

                <p>
                    Coloque seu email para saber quando novos eventos
                    chegarem.
                </p>

                <div id="input_group">
                    <input type="email" id="email">
                    <button>
                        <i class="fa-regular fa-envelope"></i>
                    </button>
                </div>
            </div>
        </div>

        <div id="footer_copyright">
            Ticketly &#169
            Copyright 2023
        </div>
    </footer>
    <!-- fim do rodapé -->
    <script src="cadastro.js"></script>
</body>
</html>
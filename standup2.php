<?php
    session_start();
    if((!isset($_SESSION['nome']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['nome']);
        unset($_SESSION['senha']);
        header('Location: ../../cadastro.php');
    }
    $nome = $_SESSION['nome'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Stand up</title>
    <link rel="stylesheet" href="style_standup2.css">
</head>

<body>
    <!-- navbar -->
    <header class="header">

        <a href="telainicial2.php" class="logo">
            <img src="../Fotos/ticketlylogo.png" alt="">
        </a>

        <nav class="navbar">
            <a href="telainicial2.php">início</a>
            <a href="teatro2.php">teatro</a>
            <a href="shows2.php">shows</a>
            <a href="standup2.php">stand up</a>
            <a href="workshops2.php">workshops</a>
            <a href="diversos2.php">diversos</a>
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
        <?= '<div class="echos">' . $nome . '</div>'; ?>
        <div class="bx bxs-user botao cadastro" onclick="window.location = 'telausuario.php'"></div>
        <div class="navbar"><a href="logout.php">Sair</a>

    </header>
    <!-- fim da navbar -->

    <!-- Titulo -->
    <div class="titulo" id="shows">
        <br><br><br><br>
        <h1>STAND UP</h1>
    </div>

    <!-- Linha de imagens -->
    <div class="container eventos">
        <div class="row">
            <div class="col-md-4">
                <div class="card" onclick="window.location= 'cordabamba2.php'"><img src="../Fotos/anoitedacordabamba.png" width="250px" height="250px" class="card-img-top" alt="Imagem 1">
                    <div class="card-body">
                        <h6 class="card-title">Sab, 02 Set - 20:30</h6>
                        <p class="card-text">A NOITE DA CORDA BAMBA</p>
                        <p class="card-text local">Boa Viagem - Recife, PE</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" onclick="window.location= 'paidosgatos2.php'"><img src="../Fotos/opaidosgatos.png" width="250px" height="250px" class="card-img-top" alt="Imagem 2">
                    <div class="card-body">
                        <h6 class="card-title">Qui, 21 Set - 20:00</h6>
                        <p class="card-text">O PAI DOS GATOS</p>
                        <p class="card-text local">Manguetown Comedy, Recife - PE</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card"><img src="../Fotos/hahahappy.png" width="250px" height="250px" class="card-img-top" alt="Imagem 3">
                    <div class="card-body">
                        <h6 class="card-title">Sex, 27 de Out - 19:00</h6>
                        <p class="card-text">HAHAHAPPY HOUR</p>
                        <p class="card-text local">Centro de Convenções - Olinda, PE </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card"><img src="../Fotos/sopiadaboa.png" width="300px" height="250px" class="card-img-top" alt="Imagem 1">
                    <div class="card-body">
                        <h6 class="card-title">Dom, 03 Set - 20:00</h6>
                        <p class="card-text">SÓ PIADA BOA</p>
                        <p class="card-text local">Pina - Recife, PE</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card"><img src="../Fotos/radio_peao.png" width="300px" height="250px" class="card-img-top" alt="Imagem 2">
                    <div class="card-body">
                        <h6 class="card-title">Qui, 05 Out - 22:00</h6>
                        <p class="card-text">RÁDIO PEÃO</p>
                        <p class="card-text local">Teatro Guararapes - Olinda, PE</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card"><img src="../Fotos/welson_nunes.jpg" width="300px" height="250px" class="card-img-top" alt="Imagem 2">
                    <div class="card-body">
                        <h6 class="card-title">Sab, 30 Set - 20:00</h6>
                        <p class="card-text">WELSON NUNES - MANGUETOWN</p>
                        <p class="card-text local">TManguetown Comedy - Recife, PE</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- rodapé -->
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
                        <a href="shows2.php" class="footer-link">Shows</a>
                    </li>
                    <li>
                        <a href="teatro2.php" class="footer-link">Teatro</a>
                    </li>
                    <li>
                        <a href="workshops2.php" class="footer-link">Workshops</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Stand up</a>
                    </li>
                    <li>
                        <a href="diversos2.php" class="footer-link">Diversos</a>
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
    
    
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script src="categoria_scripts.js"></script>


  



</body>

</html>
<style>
    .echos {
        color: black;
        font-size: 18px;
        padding-right: 22px;
    }
</style>
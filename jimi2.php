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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Jimi Indoor</title>
    <link rel="stylesheet" href="style_jimi2.css">

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


    <!-- Info -->
    <div class="flex-container" id="home">
        <div class="pericles">
            <img src="../Fotos/xeletronica.png" style="border-radius: 30px !important;"
                class="mx-auto d-block img-fluid evento" width="800px" height="300px">

        </div>
    </div>

    <div class="titulo-info">
        <h1>JIMI INDOOR - 07/10/2023</h1>
        <h4>Domingo às 16h | 07 de Outubro</h4>
        <h4>Bunker - Recife, PE</h4>
    </div>
    <div class="todas-info principal">
        <div class="col col-esq">
            <div class="info-evento">
                <div class="header-col info">
                    <span class="icon">
                        <i class='bx bxs-info-circle'></i>
                    </span>
                    <h4>Informações</h4>
                    <br>
                </div>
                <h5>Sobre:</h5>
                📅 DATA: 07 DE OUTUBRO(SÁBADO) <br><br>
                ⏰ HORÁRIO: 16H00 <br><br>
                📍 LOCAL: BUNKER, R. JOSÉ DA SILVA LUCENA, 515 - IMBIRIBEIRA - PE
                <br>
                <br>
                <h5>Participações principais:</h5>
                &bull;SAMBARELOVE
                <br>
                &bull;BIEL VICTOR
                <br>
                &bull;MOMENTO JIMI INDOOR 
                <br>
                &bull;RAMON SCHNAYDER (+ 3 HORAS DE AXÉ RETRO)
                <br>
                &bull;FELIPE FARRA
                <br>
                &bull;AFTER BORA VIVER
                <br>
                <br>
                <h5>Informações Importantes:</h5>
                &bull; Observe atentamente as regras sanitárias do seu evento.
                <br>
                <br>
                &bull; COMPREI O INGRESSO PELO SITE / APLICATIVO, COMO VOU ENTRAR NO EVENTO?
                <br>
                &bull;Basta apresentar o código QR do seu ingresso ao segurança/porteiro do evento.
                Lembre-se que não será aceito print do ingresso!
                <br>
                <br>
                &bull;Você também pode consultar outras dúvidas sobre ingressos na Central de Ajuda Ingressos.
                <br>
                <br>
                &bull;O ingresso é válido apenas para o local e setor indicado.
                <br>
                <br>
                &bull;É proibido o acesso às dependências do evento de pessoas portando armas de qualquer tipo, caixas,
                foguetes, objetos cortantes ou contundentes ou outros que possam causar ferimentos a terceiros.
                <br>
                <br>
                &bull;A entrada de alimentos e bebidas de quaisquer natureza é proibida.
                <br>
                <br>
                &bull;Proibido o consumo de bebidas alcoólicas por menores de idade.
                <br>
                <br>
                &bull;Observe a classificação do evento.
                <br>
                <br>
                &bull;O titular do ingresso declara expressamente aceitar que sua imagem e áudio possam ser captados e
                gravados durante a realização do evento e cede de modo gratuito e definitivo, todos os direitos de
                imagem e áudio para todos os fins.
                <br>
                <br>
                &bull;Não nos responsabilizamos por ingressos comprados a terceiros, ou seja, use sempre os canais oficias
                do evento.
                <br>
                <br>
                &bull;Desconfie sempre de ingressos abaixo do valor de mercado e muita facilidade na compra.
                <br>
                <br>
                &bull;Não compre ingressos a CAMBISTAS.
                <br>
                <br>
                &bull;O ingresso é um título ao portador. Em caso de roubo, furto ou fenômeno da natureza, não reimprimimos
                ingresso.
                <br>
                <br>
                &bull;Não dobre o ingresso e proteja o código de barra. Guarde em um local seco e seguro.
                <br>
                <br>
                <h5>Classificação:</h5>
                &bull;18 ANOS
            </div>
        </div>
        <div class="col col-dir">
            <div id="ingresso-evento">
                <div class="box-ingressos">
                    <div class="header-col info">
                        <span class="icon">
                            <i class='bx bxs-purchase-tag-alt'></i>
                        </span>
                        <h4>Ingressos</h4>
                        <br>
                        <br>
                    </div>
                    <div class="ingressos">
                        <div class="tipo-ingresso">
                            <p>INDIVIDUAL</p>
                        </div>
                        <div class="class-indicativa">
                            <p>
                                <i class='bx bxs-error'>+18</i>
                            </p>
                        </div>
                    </div>
                    <fieldset>
                        <div class="opcao-ingresso">
                            <div class="info-header">
                                <span class="info-esq">1º Lote</span>
                                <span class="info-dir">Sub Total</span>
                            </div>
                            <h2>
                                <span class="caps">INDIVIDUAL</span>
                            </h2>
                            <p></p>
                            <div class="opcao-valor">
                                <select class="escolha" name="Quant1" id="Quant1" onchange="javascript:cItems()">
                                    <option value="0">Quant.</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                <div class="valor-ingresso">
                                    <span> R$ 100.00 </span>
                                </div>
                                <div class="subtotal-valor">
                                    <span id="subtotal" class="valor-dir">R$ 0.00</span>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="header-col info">
                        <span class="icon">
                            <i class='bx bxs-cart'></i>
                        </span>
                        <h4>Resumo do Pedido</h4>
                        <br>
                    </div>
                    <fieldset class="valor-todo" id="todovalor">
                        <span class="caps">Valor total dos ingressos
                            <span id="valortotal" class="valor-dir">R$ 0.00</span>
                        </span>
                    </fieldset>
                    <div class="wrapper" onclick="window.location = 'telapagamento.php'">
                        <a href="#" class="avançar"><span>Avançar</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br>
    <!-- fim da Info   -->

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
                    <a href="standup2.php" class="footer-link">Stand up</a>
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

    <script src="jimi.js"></script>

</body>

</html>
<style>
    .echos {
        color: black;
        font-size: 18px;
        padding-right: 22px;
    }
</style>
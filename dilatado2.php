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
    <title>Sunset</title>
    <link rel="stylesheet" href="style_dilatado2.css">
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
            <img src="../Fotos/dilatado.png" style="border-radius: 30px !important;"
                class="mx-auto d-block img-fluid evento" width="800px" height="300px">

        </div>
    </div>

    <div class="titulo-info">
        <h1> MARCO LUQUE EM "DILATADOS" </h1>
        <h4>Quinta às 20:00h | 30 de Novembro à 07 de Dezembro</h4>
        <h4>Teatro Das Artes - São Paulo, SP</h4>
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
                O Ator , humorista e palhaço, Marco Luque traz “o sérumaninho Mustafary e o motoboy Jackson Faive, para trocar aquela ideia sobre tudo de mais dilatado que vem ocorrendo em nossa biosfera terrestre. Em “Dilatados”, Marco Luque conta as façanhas de Jackson Faive – o motoboy paulistano mais famoso do Brasil – Mustafáry – um vegetariano irônico e controverso, que prega a sustentabilidade do Planeta, diz amar a natureza e os animais (especialmente o serumaninho, cachorro que encontrou na praia). O universo destes personagens é certeza de diversão garantida.
                <br><br>
                A versatilidade de Marco Luque, comprovada desde a bancada do CQC (TV Band) , Altas Horas , na Nova Escolinha do Professor Raimundo , Cinema, Mini-séries etc mostram outras peculiaridades do artista, com momentos inesquecíveis para o público. “Marco Luque em: Dilatados” tem 70 minutos de duração, produção de Macatranja Produções com criação e Direção de Luque e Guilherme Rocha.
                <br><br>
                📅 DATA: 30 DE NOVEMBRO À 07 DE DEZEMBRO, (QUINTA-FEIRA ATÉ PROXIMA QUINTA-FEIRA )<br><br>
                ⏰ HORÁRIO: A PARTIR DAS 20H00<br><br>
                📍 LOCAL: TEATRO DAS ARTES (AVENIDA REBOUÇAS, 3970 -  SÃO PAULO, SP) 
                <br><br>
                
                <h5>Informações Importantes:</h5>
                &bull; Observe atentamente as regras sanitárias do seu evento.
                <br>
                <br>
                &bull; Para acessar o evento, basta apresentar o código QR do seu ingresso ao segurança/porteiro do evento.
                Lembre-se que não será aceito print do ingresso!
                <br>
                <br>
                &bull; Você também pode consultar outras dúvidas sobre ingressos na Central de Ajuda Ingressos.
                <br>
                <br>
                &bull; O ingresso é válido apenas para o local e setor indicado.
                <br>
                <br>
                &bull; É proibido o acesso às dependências do evento de pessoas portando armas de qualquer tipo, caixas,
                foguetes, objetos cortantes ou contundentes ou outros que possam causar ferimentos a terceiros.
                <br>
                <br>
                &bull; A entrada de alimentos e bebidas de quaisquer natureza é proibida.
                <br>
                <br>
                &bull; Proibido o consumo de bebidas alcoólicas por menores de idade.
                <br>
                <br>
                &bull; Observe a classificação do evento.
                <br>
                <br>
                &bull; Não nos responsabilizamos por ingressos comprados a terceiros, ou seja, use sempre os canais oficias
                do evento.
                <br>
                <br>
                &bull; Desconfie sempre de ingressos abaixo do valor de mercado e muita facilidade na compra.
                <br>
                <br>
                &bull; O ingresso é um título ao portador. Em caso de roubo, furto ou fenômeno da natureza, não reimprimimos
                ingresso.
                <br>
                <br>
                &bull; Não dobre o ingresso e proteja o código de barra. Guarde em um local seco e seguro.
                <br><br>
                
                <h5>Classificação:</h5>
                &bull; 14 ANOS
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
                            <p>BALCÃO</p>
                        </div>
                        <div class="class-indicativa">
                            <p>
                                <i class='bx bxs-error'>14</i>
                            </p>
                        </div>
                    </div>
                    <fieldset>
                        <div class="opcao-ingresso">
                            <div class="info-header">
                                <span class="info-dir">Sub Total</span>
                            </div>
                            <h2>
                                <span class="caps">MEIA</span>
                                <br>
                                Mediante comprovação de meia entrada
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
                                    <span> R$ 40.00 </span>
                                </div>
                                <div class="subtotal-valor">
                                    <span id="subtotal" class="valor-dir">R$ 0.00</span>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="opcao-ingresso">
                            <div class="info-header">
                                <span class="info-dir">Sub Total</span>
                            </div>
                            <h2>
                                <span class="caps">INTEIRA</span>
                            </h2>
                            <p></p>
                            <div class="opcao-valor">
                                <select class="escolha" name="Quant2" id="Quant2" onchange="javascript:cItems2()">
                                    <option value="0">Quant.</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                <div class="valor-ingresso">
                                    <span> R$ 80.00 </span>
                                </div>
                                <div class="subtotal-valor">
                                    <span id="subtotal2" class="valor-dir">R$ 0.00</span>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="ingressos">
                        <div class="tipo-ingresso">
                            <p>PLATEIA CENTRAL</p>
                        </div>
                        <div class="class-indicativa">
                            <p>
                                <i class='bx bxs-error'>14</i>
                            </p>
                        </div>
                    </div>
                    <fieldset>
                        <div class="opcao-ingresso">
                            <div class="info-header">
                                <span class="info-dir">Sub Total</span>
                            </div>
                            <h2>
                                <span class="caps">MEIA</span>
                            </h2>
                            <p></p>
                            <div class="opcao-valor">
                                <select class="escolha" name="Quant4" id="Quant3" onchange="javascript:cItems3()">
                                    <option value="0">Quant.</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                <div class="valor-ingresso">
                                    <span> R$ 50.00 </span>
                                </div>
                                <div class="subtotal-valor">
                                    <span id="subtotal3" class="valor-dir">R$ 0.00</span>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="opcao-ingresso">
                            <div class="info-header">
                                <span class="info-dir">Sub Total</span>
                            </div>
                            <h2>
                                <span class="caps">INTEIRA</span>
                            </h2>
                            <p></p>
                            <div class="opcao-valor">
                                <select class="escolha" name="Quant4" id="Quant4" onchange="javascript:cItems4()">
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
                                    <span id="subtotal4" class="valor-dir">R$ 0.00</span>
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

    <script src="dilatado.js"></script>

</body>

</html>
<style>
    .echos {
        color: black;
        font-size: 18px;
        padding-right: 22px;
    }
</style>
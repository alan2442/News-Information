<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Information</title>
    <link rel="stylesheet" href="css/style1.css">
</head>
<body id="" class="home">
    
    <div id="container"><!-- Início Container -->

        <div id="topo"> <!-- Início Topo-->
            
            <h1 class="logo">News Information</h1>
            
            <ul id="navegacao"><!-- Início Barra de Navegação Horizontal -->

                <li class="primeiro">
                    <a href="index.php" id="home">Home</a>
                </li>

                <li>
                    <a href="brasil.php" id="brasil">Brasil</a>
                </li>

                <li>
                    <a href="internacional.php" id="internacional">internacional</a>
                </li>

                <li>
                    <a href="economia.php" id="economia">economia</a>
                </li>

                <li>
                    <a href="saude.php" id="saude">Saúde</a>
                </li>

                <li>
                    <a href="ciencia.php" id="ciencia">Ciência</a>
                </li>

                <li>
                    <a href="fotos.php" id="fotos">Fotos</a>
                </li>

            </ul> <!-- Fim Barra de Navegação Horizontal -->


        </div> <!-- Fim Topo -->

        <div id="conteudo"> <!-- Início Conteudo-->

            <div id="primario"> <!-- Início Conteudo Primário-->
                
                <div class="caixa"> <!-- Início Caixa Destaque-->

                    <h2>Destaque</h2>
                    <div class="caixa-conteudo destaque">
                        <h3>Nova legislação</h3>
                        <img class="imagem-principal" src="imagens/mundo.jpg" alt="" width="100%">
                        <p>
                        PL das Fake News deve ser votado nesta terça-feira, 2; entenda o que pode mudar
                        </p>
                        <a href="pagdestaque/nova-legislacao.php">Leia mais!</a>

                    </div>


                    <h2>Brasil</h2>
                    <div class="caixa-conteudo pensao-especial"> <!-- Início Caixa pensão especial-->
                        <h3>Pensão Especial</h3>
                        <img class="imagem-principal" src="imagens/logotipo.jpg" alt="" width="100%" height="150px">
                        <p>
                            Câmara aprova pensão especial para filhos de vítimas de feminicídio
                        </p>
                        <a href="pagdestaque/pensao-especial.php">Leia mais!</a>

                    </div> <!-- Fim caixa pensão especial-->


                    <h2>Mundo</h2>
                    <div class="caixa-conteudo">

                        <ul id="lista-noticias">

                            <li> <!-- Noticia 01 -->
                                <a href="pagdestaque/noticia1.php">
                                    <img src="imagens/tecnologia.jpg" alt="">
                                    <h3>Dia do trabalho</h3>
                                    <p>
                                       brasileiros estão insatisfeitos com salário e jornada profissional
                                    </p>
                                </a>
                            </li>

                            <li> <!-- Noticia 02 -->
                                <a href="">
                                    <img src="" alt="">
                                    <h3></h3>
                                    <p></p>
                                </a>
                            </li>

                            <li> <!-- Noticia 03 -->
                                <a href="">
                                    <img src="" alt="">
                                    <h3></h3>
                                    <p></p>
                                </a>
                            </li>

                            <li> <!-- Noticia 04 -->
                                <a href="">
                                    <img src="" alt="">
                                    <h3></h3>
                                    <p></p>
                                </a>
                            </li>

                        </ul>

                    </div>

                </div> <!-- Fim caixa Destaque-->



   

                

            </div> <!-- Fim Conteudo Primário-->

            <div id="secundario"> <!-- Início Conteudo Secundario-->
                Conteudo Secundario
            </div> <!-- Fim Conteudo Secundario-->

            <div id="lateral"> <!-- Início Barra lateral-->

                <div class="caixa"> <!-- Início Caixa-->

                    <h2>Entrevista</h2>
                    <ul>
                        <li><a href="">José Almeida</a></li>
                        <li><a href="">Felipe Costa</a></li>
                        <li><a href="">Humberto de Alencar</a></li>
                        <li><a href="">Maria das Neves</a></li>
                        <li><a href="">Anderson Gomes</a></li>
                        <li><a href="">Marta Ribeiro</a></li>
                        <li><a href="">Airton Senna</a></li>
                        <li><a href="">Tim Maia</a></li>
                    </ul>
                </div> <!-- Fim caixa-->

                <div class="caixa"> <!-- Inicio Caixa de cadastrar email -->

                    <h2>News</h2>
                    <div class="caixa-conteudo">

                        <form action="">

                            <div>
                                <label for="email">Email:</label>
                                <input type="text" name="email" id="email" placeholder="E-mail:">
                            </div>

                            <div>
                                <input class="submit" type="submit" value="Cadastrar">
                            </div>

                        </form>

                    </div>

                </div> <!-- FIM Caixa de cadastrar email -->

            </div> <!-- Fim Barra lateral-->


        </div> <!-- Fim Conteudo-->

    </div> <!-- FIM Container -->

</body>
</html>
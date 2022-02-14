<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{url('/').(app()->environment('production')?'/public': '').'/css/Home.css'}}">
    <link rel="stylesheet" href="{{url('/').(app()->environment('production')?'/public': '').'/css/rangeButton.css'}}">
    <title>Nâmarí | Pratas e Acessórios</title>
</head>
<body>
    <div class="pos-f-t fixedTop" style="border-bottom: 1px solid #8b6c4e52; z-index: 90;">
        <nav id="navbar" class="navbar navbar-dark bg-dark corRosa" >
            <a href="/" class="divLogo">
                <img class="logo" src="{{url('/')}}/images/logo.png" alt="namari.logo">
                <span class="textLogo">
                    Nâmarí | Pratas e Acessórios
                </span>
            </a>

            <div id="mainMenu" style="display: flex;">
                <a href="#login" class="itemNavBar">Iniciar sessão</a>

                <a href="#cart" class="itemNavBar"><i class="fas fa-heart"></i> Favoritos </a>
                <a href="#cart" class="itemNavBar"><i class="fas fa-shopping-basket"></i> (0) Compras </a>

                <a href="#contacts" class="itemNavBar">
                    <i onclick="openInNewTab('insta')" class="fab fa-instagram" style="padding-left: 1px;"></i>
                    <i onclick="openInNewTab('twitter')" class="fab fa-twitter" style="padding-left: 7px;"></i>
                    <i onclick="openInNewTab('face')" class="fab fa-facebook" style="padding-left: 7px;"></i>
                </a>

                <button id="expandNavBar" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation" style="border-color: #8b6c4e67;">
                    <img class="imgBars" src="{{url('/')}}/images/bars.png" alt="namari.bars">
                </button>
            </div>
        </nav>

        <div class="collapse show" id="navbarContent">
            <div class= "p-4 corRosa">
                <div style="display: flex; justify-content: space-between;">
                    <div style="display: flex; flex-direction: column; width: 65%;">

                        <div style="display: flex;">
                            <section id="sexoRG" class="dark rgBoxTitle" style="width: 45% !important;">
                                <label for="sexoRG" class="rgTextTitle"> Sexo </label>
                                <label class="labelRG"> <input type="radio" class="radioGroup" name="sexo" value="f" checked> <span class="design"></span> <span class="text">Feminino</span> </label>
                                <label class="labelRG"> <input type="radio" class="radioGroup" name="sexo" value="m"> <span class="design"></span> <span class="text">Masculino</span> </label>
                                <label class="labelRG"> <input type="radio" class="radioGroup" name="sexo" value="a"> <span class="design"></span> <span class="text">Ambos</span> </label>
                            </section>

                            <section id="metalRG" class="dark rgBoxTitle" style="margin-left: 5%; width: 100% !important;">
                                <label for="metalRG" class="rgTextTitle"> Tipo </label>
                                <label class="labelRG"> <input type="checkbox" class="radioGroup" name="brinco" checked> <span class="design"></span> <span class="text">Brincos</span> </label>
                                <label class="labelRG"> <input type="checkbox" class="radioGroup" name="pulseira"> <span class="design"></span> <span class="text">Pulseiras</span> </label>
                                <label class="labelRG"> <input type="checkbox" class="radioGroup" name="anel"> <span class="design"></span> <span class="text">Aneis</span> </label>
                                <label class="labelRG"> <input type="checkbox" class="radioGroup" name="colar"> <span class="design"></span> <span class="text">Colares</span> </label>
                                <label class="labelRG"> <input type="checkbox" class="radioGroup" name="piercing"> <span class="design"></span> <span class="text">Piercings</span> </label>
                            </section>
                        </div>

                        <div style="display: flex; margin-top: 35px;">
                            <section id="metalRG" class="dark rgBoxTitle" style="width: 60% !important;">
                                <label for="metalRG" class="rgTextTitle"> Metal </label>
                                <label class="labelRG"> <input type="checkbox" class="radioGroup" name="prata" checked> <span class="design"></span> <span class="text">Prata</span> </label>
                                <label class="labelRG"> <input type="checkbox" class="radioGroup" name="ouro"> <span class="design"></span> <span class="text">Ouro</span> </label>
                                <label class="labelRG"> <input type="checkbox" class="radioGroup" name="semijoia"> <span class="design"></span> <span class="text">Semijoia</span> </label>
                                <label class="labelRG"> <input type="checkbox" class="radioGroup" name="bijuteria"> <span class="design"></span> <span class="text">Bijuteria</span> </label>
                            </section>

                            <section id="metalRG" class="dark rgBoxTitle" style="margin-left: 5%; width: 35%;">
                                <label for="metalRG" class="rgTextTitle">
                                    Preço: entre <span id="range1"> 0 </span> e <span id="range2"> 100 </span> reais
                                </label>

                                <div class="wrapper">
                                    <div class="rangeContainer">
                                        <div class="slider-track"></div>
                                        <input type="range" min="0" max="1000" value="0" id="slider-1" oninput="slideOne()">
                                        <input type="range" min="0" max="1000" value="1000" id="slider-2" oninput="slideTwo()">
                                    </div>
                                </div>
                                {{-- <label class="labelRG"> MIN: <input type="number" class="valueInput" name="vmin" min="0" placeholder="0.00"> </label>
                                <label class="labelRG"> MAX: <input type="number" class="valueInput" name="vmax"  min="0" placeholder="0.00"> </label> --}}
                            </section>
                        </div>
                    </div>

                    <div style="width: 30%; ">
                        <input class="searchBox" placeholder="Pesquisar">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="container" style="padding-top: 10px;">

        <div id="postit" style="position: absolute; width: 100%; display: flex; justify-content: center;">
            <div style=" margin: 25px; text-align: center; border-radius: 5px; border: 1px solid #c49d9e; width: 50%; height: 80%;">
                <div style="padding: 5px; background-color: #c49d9e; color: white; font-size: 28px; font-weight: bold; font-style: oblique;">
                    LEMBRETE
                </div>
                <div style="font-size: 22px;">
                    As mulheres são o maior reservatório inexplorado de talentos do mundo
                </div>
                <div>
                    Hillary Clinton
                </div>
            </div>
        </div>

        <div class="headerContainer">
            <div>
                <div style="display: flex; color: black;">
                    <form action="#" class="orderBy">

                        <label for="orderBy"> ORDENAR POR:</label>
                        <select name="orderBy" id="orderBy" class="orderBySelect">
                            <option class="orderBy" value="relevancia">Relevância</option>
                            <option class="orderBy" value="maisVendido">Mais Vendidos</option>
                            <option class="orderBy" value="menorPreco">Menor Preço</option>
                            <option class="orderBy" value="maiorPreco">Maior Preço</option>
                            <option class="orderBy" value="maisRecente">Mais Recentes</option>
                            <option class="orderBy" value="alfaAZ">Ordem Alfabética (A- Z)</option>
                            <option class="orderBy" value="alfaZA">Ordem Alfabética (Z - A)</option>
                            <option class="orderBy" value="maiorDesconto">Maior Desconto</option>
                        </select>
                    </form>
                </div>
            </div>

            <div style="display: flex;">
                <div>
                    <input type="radio" id="list" name="layoutType" value="list" style="display: none;" checked onclick="mudaLayoutProd(0)">
                    <label for="list" class="btnlayoutIMG">
                        <i class="fas fa-list-alt"></i>
                    </label>
                </div>

                <div>
                    <input type="radio" id="listImages" name="layoutType" value="listImages" style="display: none;" onclick="mudaLayoutProd(1)">
                    <label for="listImages" class="btnlayoutIMG">
                        <i class="fas fa-images"></i>
                    </label>
                </div>

                <div>
                    <input type="radio" id="bigImages" name="layoutType" value="bigImages" style="display: none;" onclick="mudaLayoutProd(2)">
                    <label for="bigImages" class="btnlayoutIMG">
                        <i class="fas fa-image"></i>
                    </label>
                </div>
            </div>
        </div>

        <div style="display: flex; flex-wrap: wrap; justify-content: center;">
            @for ($Index = 0; $Index <= 14; $Index++)

                <div name="prodBox" class="prodBoxList" style="position: relative;">
                    <div style="margin: 10px; position: absolute; right: 0; z-index: 10;">
                        @if (($Index == 3) or ($Index == 5))
                            <button style="border: none; background: none;" onclick="alert('desfavoritar')">
                                <i class="fas fa-heart icoFav"></i>
                            </button>
                        @else
                            <button style="border: none; background: none;" onclick="alert('favoritar')">
                                <i class="far fa-heart icoFav"></i>
                            </button>
                        @endif
                    </div>

                    <div id="carouselID{{$Index}}" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselID{{$Index}}" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselID{{$Index}}" data-slide-to="1"></li>
                            <li data-target="#carouselID{{$Index}}" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="imgProd" src="{{$listRandomIMG[array_rand($listRandomIMG)]}}" alt="Foto Demonstrativa 01">
                            </div>
                            <div class="carousel-item">
                                <img class="imgProd" src="{{$listRandomIMG[array_rand($listRandomIMG)]}}" alt="Foto Demonstrativa 02">
                            </div>
                            <div class="carousel-item">
                                <img class="imgProd" src="{{$listRandomIMG[array_rand($listRandomIMG)]}}" alt="Foto Demonstrativa 03">
                            </div>
                        </div>

                        <a class="carousel-control-prev" href="#carouselID{{$Index}}" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselID{{$Index}}" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Próximo</span>
                        </a>
                    </div>

                    <div style="text-align: center; padding: 0 5px 0 5px;">
                        <div style="color: black; font-size: 32px; line-height: 18pt;">
                            Colar bracelete descrição
                        </div>
                        <div style="margin-top: 10px;">
                            Pulseira feminina de Prata estilo Roquefort
                        </div>

                        <div style="margin-top: 5px; color: #5f4b37; font-size: 32px; font-weight: 600;">
                            <span style="color: #5f4b37;">R$ </span>
                            <span>100,50 </span>
                        </div>

                        <button class="btnComprar">
                            COMPRAR
                        </button>
                    </div>
                </div>
            @endfor
        </div>

        <div style="text-align: center; margin-top: 25px;">
            <button class="btnShowMore">
                MOSTRAR MAIS
            </button>

            <div>
                Mostrando <span style="font-weight: bold; color: black;">14</span> de <span style="font-weight: bold; color: black;">198</span>
            </div>
        </div>

        <div class="rodape">
            <img style="height: 80px; width: auto;" src="{{url('/')}}/images/logo.png" alt="namari.logo">

            <div style="display: flex;">
                <i style="margin-right: 15px; font-size: 48px; align-self: center;" class="fab fa-instagram"></i>
                <div style="width: 20vw;">
                    <span style="font-weight: bold; font-size: 22px;">Dicas e Informações</span>
                    <div>No nosso insta <span style="font-size: 18px; font-style: oblique;">@use.namari</span> tem diversas dicas e informações interessantes sobre nossos produtos.</div>
                </div>
            </div>

            <div style="display: flex;">
                <i style="margin-right: 15px; font-size: 48px; align-self: center;" class="fas fa-shipping-fast"></i>
                <div style="width: 20vw;">
                    <span style="font-weight: bold; font-size: 22px;">Entrega</span>
                    <div>O seu produto é entregue no conforto da sua casa sempre com o mesmo nível de qualidade <span style="font-size: 18px; font-style: oblique;">Nâmari</span>.</div>
                </div>
            </div>

            <div style="display: flex;">
                <i style="margin-right: 15px; font-size: 48px; align-self: center;" class="fas fa-sync-alt"></i>
                <div style="width: 20vw;">
                    <span style="font-weight: bold; font-size: 22px;">Troca Facíl</span>
                    <div>Nós da <span style="font-size: 18px; font-style: oblique;">Nâmarí</span> fazemos questão de trocar as peças gratuitamente caso o tamanho esteja errado.</div>
                </div>
            </div>
        </div>
    </div>

    <div id="divCookies" class="cookies" style="display: none;">
        Este site utiliza cookies para te proporcionar uma melhor experiência.
        Ao continuar navegando, você aceita a nossa <a href="#PoliticaPrivacidade">Politica de Privacidade</a>.
        <button onclick="SetCookie()" class="btnCookies">Fechar</button>
    </div>
</body>

<script type="text/javascript" src={{url('/').(app()->environment('production')?'/public': '').'/JavaScript/Home.js'}}></script>
<script type="text/javascript" src={{url('/').(app()->environment('production')?'/public': '').'/JavaScript/rangeButton.js'}}></script>
</html>

{{-- https://fontawesome.com/v5/search?s=solid%2Cbrands - Pesquisar icones FontAwesome --}}

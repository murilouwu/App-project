<?php
    include('../assets/php/PhpMain.php');
    $html = new HtmlBased();
    $html->HeaderEcho(
        'main', 
        [
            [0, 'http-equiv="X-UA-Compatible" content="IE=edge"'],
            [0, 'name="viewport" content="width=device-width, initial-scale=1.0"'],
            [1, '../assets/css/ADM.css'],
            [2, '../assets/java/script.js'],
            [2, 'https://kit.fontawesome.com/39cab4bf95.js', 'crossorigin="anonymous"'],
            [2, 'https://code.jquery.com/jquery-3.2.1.slim.js', 'integrity="sha256-tA8y0XqiwnpwmOIl3SGAcFl2RvxHjA8qp0+1uCGmRmg=" crossorigin="anonymous"'],
        ],
        '../assets/imgs/Logo.png'
    );
?>
    <style>
        .btnM_MainPage:hover{
            cursor: pointer;
        }
        .blockMainPage{
            width: 100vw;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            overflow-y: hidden;
            background-color: var(--corD);
        }
            .HeaderMainPage{
                display: flex;
                flex-direction: row;
                width: 100vw;
                justify-content: space-around;
                align-items: center;
                padding: 3vh 0vh;
            }
                .tilteHeaderMainPage{
                    display: flex;
                    flex-direction: row;
                    align-items: center;
                    justify-content: space-between;
                }
                    .logoImgMainPage{
                        width: 6vw;
                        height: 4vw;
                        background-image: url(https://raw.githubusercontent.com/murilouwu/CronometraisIMGS/main/Logo2.png);
                        background-size: cover;
                        background-position: center;
                        background-repeat: no-repeat;
                        border: 2px solid var(--corC);
                        border-radius: 1vw;
                    }   
                    .tilteHeaderMainPage h1{
                        color: var(--corB);
                        font-size: 6vh;
                        font-style: italic;
                        font-family: 'FontBas';
                        letter-spacing: 0.3vw;
                        margin-left: 2vw;
                    }
            .M_MainPage{
                display: flex;
                flex-direction: row;
                width: 100vw;
                justify-content: space-between;
                align-items: center;
                padding: 3vh 0vh;
            }
                .BtnsM_MainPage{
                    display: flex;
                    flex-direction: column;
                    align-items: flex-start;
                    justify-content: center;
                    margin-left: 9vw;
                }
                    .UlBtnM_MainPage{
                        color: var(--corA);
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        font-size: 3vh;
                        font-family: monospace;
                        font-weight: bold;
                        margin-bottom: 2vw;
                    }
                        .btnM_MainPage{
                            color: var(--corD);
                            width: 4vw;
                            height: 4vw;
                            background-color: var(--corA);
                            border: none;
                            border-radius: 1vw;
                            font-size: 4vh;
                        }
                        .UlBtnM_MainPage h3{
                            margin-left: 1vw;
                        }
                .bussysMainPage{
                    display: flex;
                    margin-right: 3vh;
                    flex-direction: row;
                    justify-content: center;
                    align-items: center;
                }
                    .VeicleMainPage{
                        background-size: contain;
                        background-repeat: no-repeat;
                        background-position: center;
                    }
                        .VclAMainPage{
                            color: var(--corA);
                            height: 23vh;
                            width: 24vw;
                            margin-right: -9vw;
                            margin-top: 4vh;
                            background-image: url(https://github.com/murilouwu/CronometraisIMGS/blob/main/VeicA.png?raw=true);
                            filter: drop-shadow(-13px 1px 0px rgba(0 0 0/ 21%));
                        } 
                        .VclBMainPage{
                            color: var(--corA);
                            background-image: url(https://github.com/murilouwu/CronometraisIMGS/blob/main/VeicB.png?raw=true);
                            height: 33vh;
                            width: 34vw;
                            filter: drop-shadow(-13px -7px 0px rgba(0 0 0/ 36%));
                        } 
            .FotterMainPage{
                background-color: var(--corA);
                width: 100vw;
                height: auto;
                margin-top: 9vh;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding-bottom: 100vh;
            }
                .balsFotterMainPage{
                    width: 100vw;
                    height: auto;
                    display: flex;
                    flex-direction: row;
                    justify-content: space-between;
                    align-items: center;
                    background-color: var(--corA);
                }
                    .ballFotterMainPage{
                        width: 50vw;
                        height: 5vw;
                    }
                        .ballFotterMainPage:nth-child(1){
                            background-color: var(--corD);
                            clip-path: ellipse(50% 100% at 50% 0%);
                        }
                        .ballFotterMainPage:nth-child(2){
                            background-color: var(--corA);
                            z-index: 2;
                            clip-path: ellipse(50% 100% at 50% 103%);
                            margin-top: -18vh;
                            margin-right: 0vh;
                            width: 50vw;
                            height: 10vh;
                            border-radius: 0;
                            align-items: center;
                            display: flex;
                            flex-direction: column;
                            justify-content: flex-start;
                        }
                            .blockMensageMainPage{
                                display: none;
                                flex-direction: column;
                                align-items: center;
                                justify-content: center;
                                width: 43vw;
                                margin-top: 2vh;
                            }
                                .imgRepresentMainPage{
                                    width: 21vw;
                                    height: auto;
                                }
                                .mensMainPage{
                                    word-wrap: break-word;
                                    font-size: 2vh;
                                    font-family: cursive;
                                    font-weight: bold;
                                    color: var(--corD);
                                    width: 41vw;
                                    padding: 1vh;
                                }
        @keyframes ballEdit{
            0%{
                clip-path: ellipse(50% 100% at 50% 103%);
                margin-top: -19vh;
                margin-right: 0vh;
                height: 10vh;
                border-radius: 0;
            }
            50%{
                clip-path: ellipse(50% 170% at 50% 67%);
                margin-top: -28vh;
                margin-right: 1vh;
                height: 23vh;
                border-radius: 0.25vw;
            }
            100%{
                    clip-path: none;
                    margin-top: -36vh;
                    margin-right: 2vh;
                    height: 36vh;
                    border-radius: 0.5vw;
            }
        }
    </style>
    <body>
        <div class="blockMainPage">
            <div class="HeaderMainPage">
                <div class="tilteHeaderMainPage">
                    <div class="logoImgMainPage"></div>
                    <h1>CRONOMETRAIS</h1>
                </div>
            </div>
            <div class="M_MainPage">
                <div class="BtnsM_MainPage">
                    <div class="UlBtnM_MainPage">
                        <button class="btnM_MainPage"><i class="fa-solid fa-bus"></i></button>
                        <h3>Veículos</h3>
                    </div>
                    <div class="UlBtnM_MainPage">
                        <button class="btnM_MainPage"><i class="fa-solid fa-plus"></i></button>
                        <h3>Adicionar</h3>
                    </div>
                    <div class="UlBtnM_MainPage">
                        <button class="btnM_MainPage"><i class="fa-solid fa-user"></i></button>
                        <h3>Perfil</h3>
                    </div>
                    <div class="UlBtnM_MainPage">
                        <button class="btnM_MainPage"><i class="fa-solid fa-gear"></i></button>
                        <h3>Configuração</h3>
                    </div>
                </div>
                <div class="bussysMainPage">
                    <div class="VeicleMainPage VclAMainPage"></div>
                    <div class="VeicleMainPage VclBMainPage"></div>
                </div>
            </div>
            <div class="FotterMainPage">
                <div class="balsFotterMainPage">
                    <div class="ballFotterMainPage"></div>
                    <div class="ballFotterMainPage" id="ballFotterMainPageA">
                        <div class="blockMensageMainPage">
                            <img src="https://raw.githubusercontent.com/murilouwu/CronometraisIMGS/main/Logo.png" class="imgRepresentMainPage">
                            <p class="mensMainPage">....</p>
                            <script>
                                let divs = [document.querySelector('.blockMensageMainPage'), document.querySelector('.mensMainPage'), document.querySelector('#ballFotterMainPageA'), document.querySelector('.imgRepresentMainPage')];
                                let btns = document.querySelectorAll('.btnM_MainPage');
                                let blockItem = [
                                    ['https://raw.githubusercontent.com/murilouwu/CronometraisIMGS/main/bussyStation.png', 'Na guia de Veículos, oferecemos uma visão abrangente de todos os seus veículos. Rastreie em tempo real, otimize rotas e melhore a eficiência operacional da sua frota de ônibus e vans.'],
                                    ['https://raw.githubusercontent.com/murilouwu/CronometraisIMGS/main/VeicA.png', 'Em Adicionar Veículos, você tem o controle total sobre a gestão da sua frota. Cadastre novos veículos, personalize horários e rotas para garantir uma operação de transporte perfeitamente organizada.'],
                                    ['https://raw.githubusercontent.com/murilouwu/CronometraisIMGS/main/bitcoin.png', 'Edite seu Perfil facilmente nesta seção. Mantenha suas informações sempre atualizadas, incluindo contato e detalhes da empresa. Uma maneira simples de manter uma presença profissional.'],
                                    ['https://raw.githubusercontent.com/murilouwu/CronometraisIMGS/main/Bussy.png', 'A guia de Configurações oferece opções personalizadas para adaptar o sistema às necessidades exclusivas da sua empresa. Personalize recursos, ajuste preferências e mantenha tudo sob controle.']
                                ];

                                btns.forEach((btn, btnIndex) => {
                                    btn.addEventListener('click', function () {
                                        divs[2].style.animation = 'ballEdit 0.5s linear';
                                        setTimeout(()=>{
                                            divs[0].style.display = 'flex';
                                            divs[3].src = blockItem[btnIndex][0];
                                            divs[1].textContent = blockItem[btnIndex][1];
                                            // Altera o estilo para .cem
                                            divs[2].style.clipPath = 'none';
                                            divs[2].style.marginTop = '-36vh';
                                            divs[2].style.marginRight = '2vh';
                                            divs[2].style.width = '50vw';
                                            divs[2].style.height = '36vh';
                                            divs[2].style.borderRadius = '0.5vw';
                                        }, 500);
                                    });

                                    btn.addEventListener('dblclick', function () {
                                        divs[2].style.animation = 'ballEdit 0.5s linear reverse';
                                        setTimeout(()=>{
                                            divs[0].style.display = 'none';
                                            // Altera o estilo para .zero
                                            divs[2].style.clipPath = 'ellipse(50% 100% at 50% 103%)';
                                            divs[2].style.marginTop = '-18vh';
                                            divs[2].style.marginRight = '0vh';
                                            divs[2].style.width = '50vw';
                                            divs[2].style.height = '10vh';
                                            divs[2].style.borderRadius = '0';
                                        }, 500);
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script>
    </script>
<?php 
    $html->foot();
?>
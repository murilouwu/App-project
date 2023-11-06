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
        .UlBtnHeaderMainPage:hover, .UlBtnM_MainPage:hover, .UlBtnFotterMainPage:hover{
            cursor: pointer;
        }
        .blockMainPage{
            width: 100vw;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            overflow-y: overlay;
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
                        background-image: url(../assets/imgs/Logo2.png);
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
                .BtnsHeaderMainPage{
                    display: flex;
                    flex-direction: row;
                    align-items: center;
                    justify-content: center;
                }
                    .UlBtnHeaderMainPage{
                        color: var(--corA);
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        font-size: 3vh;
                        font-family: monospace;
                        font-weight: bold;
                        margin-right: 5vw;
                    }
                        .btnHeaderMainPage{
                            color: var(--corD);
                            width: 4vw;
                            height: 4vw;
                            background-color: var(--corA);
                            border: none;
                            border-radius: 1vw;
                            font-size: 4vh;
                        }
                        .UlBtnHeaderMainPage h3{
                            margin-left: 1vw;
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
                            background-image: url(../assets/imgs/VeicA.png);
                            filter: drop-shadow(-13px 1px 0px rgba(0 0 0/ 21%));
                        } 
                        .VclBMainPage{
                            color: var(--corA);
                            background-image: url(../assets/imgs/VeicB.png);
                            height: 33vh;
                            width: 34vw;
                            filter: drop-shadow(-13px -7px 0px rgba(0 0 0/ 36%));
                        } 
.FotterMainPage{
    color: var(--corA);
}
.BtnsFotterMainPage{
    color: var(--corA);
}
.UlBtnFotterMainPage{
    color: var(--corA);
}
.btnFotterMainPage{
    color: var(--corA);
}
.UlBtnFotterMainPage h3{
    color: var(--corA);
}
    </style>
    <body>
        <div class="blockMainPage">
            <div class="HeaderMainPage">
                <div class="tilteHeaderMainPage">
                    <div class="logoImgMainPage"></div>
                    <h1>CRONOMETRAIS</h1>
                </div>
                <div class="BtnsHeaderMainPage">
                    <div class="UlBtnHeaderMainPage">
                        <button class="btnHeaderMainPage"><i class="fa-solid fa-bus"></i></button>
                        <h3>Veículos</h3>
                    </div>
                    <div class="UlBtnHeaderMainPage">
                        <button class="btnHeaderMainPage"><i class="fa-solid fa-map"></i></button>
                        <h3>Mapa</h3>
                    </div>
                </div>
            </div>
            <div class="M_MainPage">
                <div class="BtnsM_MainPage">
                    <div class="UlBtnM_MainPage">
                        <button class="btnM_MainPage"><i class="fa-solid fa-sack-dollar"></i></button>
                        <h3>Financeiro</h3>
                    </div>
                    <div class="UlBtnM_MainPage">
                        <button class="btnM_MainPage"><i class="fa-solid fa-eye"></i></button>
                        <h3>Visualização</h3>
                    </div>
                    <div class="UlBtnM_MainPage">
                        <button class="btnM_MainPage"><i class="fa-solid fa-plus"></i></button>
                        <h3>Adicionar</h3>
                    </div>
                    <div class="UlBtnM_MainPage">
                        <button class="btnM_MainPage"><i class="fa-solid fa-hourglass-half"></i></button>
                        <h3>Cronograma</h3>
                    </div>
                </div>
                <div class="bussysMainPage">
                    <div class="VeicleMainPage VclAMainPage"></div>
                    <div class="VeicleMainPage VclBMainPage"></div>
                </div>
            </div>
            <div class="FotterMainPage">
                <div class="BtnsFotterMainPage">
                    <div class="UlBtnFotterMainPage">
                        <button class="btnFotterMainPage"><i class="fa-solid fa-user"></i></button>
                        <h3>Perfil</h3>
                    </div>
                    <div class="UlBtnFotterMainPage">
                        <button class="btnFotterMainPage"><i class="fa-solid fa-gear"></i></button>
                        <h3>Configuração</h3>
                    </div>
                </div>
            </div>
        </div>
    </body>
<?php 
    $html->foot();
?>
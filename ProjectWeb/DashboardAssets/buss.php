<?php
    include('../assets/php/PhpMain.php');
    $html = new HtmlBased();
    $html->HeaderEcho(
        'buss', 
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
        body{
            background-color: var(--corC);
        }
        .list{
            display: flex;
            flex-flow: wrap;
            width: 80vw;
            height: 80vh;
            margin-top: 10vh;
            overflow: scroll;
        }
            .card{
                width: 25vw;
                height: 23vh;
                display: flex;
                flex-direction: row;
                margin-right: 2vh;
                margin-top: 2vh;
                border: 2px solid var(--corC);
                border-radius: 0.5vw;
                background-color: var(--corD);
            }
                .card .imgcard{
                    width: 45%;
                    background-color: var(--corC);
                    padding: 2.5%;
                    border-radius: 0.5vw 0vw 0vw 0.5vw;
                }
                .card .des{
                    display: flex;
                    flex-direction: column;
                    align-items: baseline;
                    justify-content: space-around;
                    width: 46%;
                    padding-left: 1vw;
                }
                    .card .des .Rota{
                        color: var(--corC);
                        font-size: 3vh;
                        font-family: 'FontBas';
                        letter-spacing: 0.15vw;
                        font-style: italic;
                    }
                    .card .des .placa{
                        color: var(--corB);
                        font-size: 1.5vh;
                    }
                    .card .des .avali{
                        color: var(--corC);
                        font-size: 5vh;
                        font-weight: bold;
                    }
                    .card .des .status{
                        color: var(--corA);
                        font-weight: bold;
                        font-family: monospace;
                        font-size: 2.5vh;
                    }
                    .card .des .btns{
                        display: flex;
                        flex-direction: row;
                        width: 100%;
                        justify-content: space-around;
                        align-items: center;
                    }
                        .card .des .btns .btnOpration{
                            color: var(--corC);
                            background-color: var(--corB);
                            border: none;
                            padding: 0.5vw;
                        }
                        
                        .card .des .btns .Del{
                            background-color: rgb(216, 53, 53);
                        }
                            .card .des .btns .btnOpration:hover{
                                cursor: pointer;
                            }
    </style>
    <body>
        <div class="list">
            <div class="card">
                <img src="https://github.com/murilouwu/CronometraisIMGS/blob/main/VeicA.png?raw=true" class="imgcard">
                <div class="des">
                    <h2 class="Rota">Santa Isabel</h2>
                    <h4 class="placa">01-ABCG</h4>
                    <label class="avali">*****</label>
                    <h3 class="status">Em Uso</h3>
                    <div class="btns">
                        <button class="Del btnOpration"><i class="fa-solid fa-trash"></i></button>
                        <button class="btnOpration"><i class="fa-solid fa-pen"></i></button>
                        <button class="btnOpration"><i class="fa-regular fa-calendar-plus"></i></button>
                        <button class="btnOpration"><i class="fa-solid fa-clock"></i></button>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="https://github.com/murilouwu/CronometraisIMGS/blob/main/VeicB.png?raw=true" class="imgcard">
                <div class="des">
                    <h2 class="Rota">Caraguava</h2>
                    <h4 class="placa">01-ABCG</h4>
                    <label class="avali">?</label>
                    <h3 class="status">Em Edição...</h3> 
                    <div class="btns">
                        <button class="Del btnOpration"><i class="fa-solid fa-trash"></i></button>
                        <button class="btnOpration"><i class="fa-solid fa-pen"></i></button>
                        <button class="btnOpration"><i class="fa-regular fa-calendar-plus"></i></button>
                        <button class="btnOpration"><i class="fa-solid fa-clock"></i></button>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="https://github.com/murilouwu/CronometraisIMGS/blob/main/VeicA.png?raw=true" class="imgcard">
                <div class="des">
                    <h2 class="Rota">Santa Isabel</h2>
                    <h4 class="placa">01-ABCG</h4>
                    <label class="avali">*****</label>
                    <h3 class="status">Em Uso</h3>
                    <div class="btns">
                        <button class="Del btnOpration"><i class="fa-solid fa-trash"></i></button>
                        <button class="btnOpration"><i class="fa-solid fa-pen"></i></button>
                        <button class="btnOpration"><i class="fa-regular fa-calendar-plus"></i></button>
                        <button class="btnOpration"><i class="fa-solid fa-clock"></i></button>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="https://github.com/murilouwu/CronometraisIMGS/blob/main/VeicB.png?raw=true" class="imgcard">
                <div class="des">
                    <h2 class="Rota">Caraguava</h2>
                    <h4 class="placa">01-ABCG</h4>
                    <label class="avali">?</label>
                    <h3 class="status">Em Edição...</h3> 
                    <div class="btns">
                        <button class="Del btnOpration"><i class="fa-solid fa-trash"></i></button>
                        <button class="btnOpration"><i class="fa-solid fa-pen"></i></button>
                        <button class="btnOpration"><i class="fa-regular fa-calendar-plus"></i></button>
                        <button class="btnOpration"><i class="fa-solid fa-clock"></i></button>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="https://github.com/murilouwu/CronometraisIMGS/blob/main/VeicA.png?raw=true" class="imgcard">
                <div class="des">
                    <h2 class="Rota">Santa Isabel</h2>
                    <h4 class="placa">01-ABCG</h4>
                    <label class="avali">*****</label>
                    <h3 class="status">Em Uso</h3>
                    <div class="btns">
                        <button class="Del btnOpration"><i class="fa-solid fa-trash"></i></button>
                        <button class="btnOpration"><i class="fa-solid fa-pen"></i></button>
                        <button class="btnOpration"><i class="fa-regular fa-calendar-plus"></i></button>
                        <button class="btnOpration"><i class="fa-solid fa-clock"></i></button>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="https://github.com/murilouwu/CronometraisIMGS/blob/main/VeicB.png?raw=true" class="imgcard">
                <div class="des">
                    <h2 class="Rota">Caraguava</h2>
                    <h4 class="placa">01-ABCG</h4>
                    <label class="avali">?</label>
                    <h3 class="status">Em Edição...</h3> 
                    <div class="btns">
                        <button class="Del btnOpration"><i class="fa-solid fa-trash"></i></button>
                        <button class="btnOpration"><i class="fa-solid fa-pen"></i></button>
                        <button class="btnOpration"><i class="fa-regular fa-calendar-plus"></i></button>
                        <button class="btnOpration"><i class="fa-solid fa-clock"></i></button>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="https://github.com/murilouwu/CronometraisIMGS/blob/main/VeicA.png?raw=true" class="imgcard">
                <div class="des">
                    <h2 class="Rota">Santa Isabel</h2>
                    <h4 class="placa">01-ABCG</h4>
                    <label class="avali">*****</label>
                    <h3 class="status">Em Uso</h3>
                    <div class="btns">
                        <button class="Del btnOpration"><i class="fa-solid fa-trash"></i></button>
                        <button class="btnOpration"><i class="fa-solid fa-pen"></i></button>
                        <button class="btnOpration"><i class="fa-regular fa-calendar-plus"></i></button>
                        <button class="btnOpration"><i class="fa-solid fa-clock"></i></button>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="https://github.com/murilouwu/CronometraisIMGS/blob/main/VeicB.png?raw=true" class="imgcard">
                <div class="des">
                    <h2 class="Rota">Caraguava</h2>
                    <h4 class="placa">01-ABCG</h4>
                    <label class="avali">?</label>
                    <h3 class="status">Em Edição...</h3> 
                    <div class="btns">
                        <button class="Del btnOpration"><i class="fa-solid fa-trash"></i></button>
                        <button class="btnOpration"><i class="fa-solid fa-pen"></i></button>
                        <button class="btnOpration"><i class="fa-regular fa-calendar-plus"></i></button>
                        <button class="btnOpration"><i class="fa-solid fa-clock"></i></button>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="https://github.com/murilouwu/CronometraisIMGS/blob/main/VeicA.png?raw=true" class="imgcard">
                <div class="des">
                    <h2 class="Rota">Santa Isabel</h2>
                    <h4 class="placa">01-ABCG</h4>
                    <label class="avali">*****</label>
                    <h3 class="status">Em Uso</h3>
                    <div class="btns">
                        <button class="Del btnOpration"><i class="fa-solid fa-trash"></i></button>
                        <button class="btnOpration"><i class="fa-solid fa-pen"></i></button>
                        <button class="btnOpration"><i class="fa-regular fa-calendar-plus"></i></button>
                        <button class="btnOpration"><i class="fa-solid fa-clock"></i></button>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="https://github.com/murilouwu/CronometraisIMGS/blob/main/VeicB.png?raw=true" class="imgcard">
                <div class="des">
                    <h2 class="Rota">Caraguava</h2>
                    <h4 class="placa">01-ABCG</h4>
                    <label class="avali">?</label>
                    <h3 class="status">Em Edição...</h3> 
                    <div class="btns">
                        <button class="Del btnOpration"><i class="fa-solid fa-trash"></i></button>
                        <button class="btnOpration"><i class="fa-solid fa-pen"></i></button>
                        <button class="btnOpration"><i class="fa-regular fa-calendar-plus"></i></button>
                        <button class="btnOpration"><i class="fa-solid fa-clock"></i></button>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="https://github.com/murilouwu/CronometraisIMGS/blob/main/VeicA.png?raw=true" class="imgcard">
                <div class="des">
                    <h2 class="Rota">Santa Isabel</h2>
                    <h4 class="placa">01-ABCG</h4>
                    <label class="avali">*****</label>
                    <h3 class="status">Em Uso</h3>
                    <div class="btns">
                        <button class="Del btnOpration"><i class="fa-solid fa-trash"></i></button>
                        <button class="btnOpration"><i class="fa-solid fa-pen"></i></button>
                        <button class="btnOpration"><i class="fa-regular fa-calendar-plus"></i></button>
                        <button class="btnOpration"><i class="fa-solid fa-clock"></i></button>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src="https://github.com/murilouwu/CronometraisIMGS/blob/main/VeicB.png?raw=true" class="imgcard">
                <div class="des">
                    <h2 class="Rota">Caraguava</h2>
                    <h4 class="placa">01-ABCG</h4>
                    <label class="avali">?</label>
                    <h3 class="status">Em Edição...</h3> 
                    <div class="btns">
                        <button class="Del btnOpration"><i class="fa-solid fa-trash"></i></button>
                        <button class="btnOpration"><i class="fa-solid fa-pen"></i></button>
                        <button class="btnOpration"><i class="fa-regular fa-calendar-plus"></i></button>
                        <button class="btnOpration"><i class="fa-solid fa-clock"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </body>

<?php 
    $html->foot();
?>
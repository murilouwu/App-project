<?php
	include('assets/php/PhpMain.php');
	$html = new HtmlBased();
    $html->HeaderEcho(
        'Conta', 
        [
            [0, 'http-equiv="X-UA-Compatible" content="IE=edge"'],
            [0, 'name="viewport" content="width=device-width, initial-scale=1.0"'],
            [1, 'assets/css/login.css'],
            [2, 'assets/java/script.js'],
            [2, 'https://kit.fontawesome.com/39cab4bf95.js', 'crossorigin="anonymous"'],
            [2, 'https://code.jquery.com/jquery-3.2.1.slim.js', 'integrity="sha256-tA8y0XqiwnpwmOIl3SGAcFl2RvxHjA8qp0+1uCGmRmg=" crossorigin="anonymous"'],
        ],
        'assets/imgs/Logo.png'
    );
    $Log = $_GET['log'];
    if(!isset($Log) || $Log!=0 && $Log!=1){
        $html->Atalho('index.php');
    }
    $_SESSION['user'] = array();
?>
    <body>
        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form method="post">
                    <h1>Entrar</h1>
                    <input name="LogBases" type="text" placeholder="Nome da Empresa ou CNPJ" />
                    <input name="LogEmail" type="email" placeholder="E-mail" />
                    <input name="LogPassW" type="password" placeholder="Senha" minlength="5"/>
                    <a href="resurck.php?pass=true">esqueceu a senha?</a>
                    <input name="Logbtn" type="submit" value="Entrar">
                </form>
            </div>
            <div class="form-container sign-up-container">
                <form method="post" enctype="multipart/form-data">
                    <h1>Crie sua Conta</h1>
                    <div class="ass">
                        <input type="radio" name="assCAD" id="A_AssBtn" value="0" class="assradio" checked>
                        <input type="radio" name="assCAD" id="B_AssBtn" value="1" class="assradio">
                        <input type="radio" name="assCAD" id="C_AssBtn" value="2" class="assradio">
                        <span id="price">Assinaturas:</span>
                        <label for="A_AssBtn" class="assibtn"><i class="fa-solid fa-van-shuttle"></i></label>
                        <label for="B_AssBtn" class="assibtn"><i class="fa-solid fa-bus"></i></label>
                        <label for="C_AssBtn" class="assibtn"><i class="fa-regular fa-star"></i></label>
                            <script>
                                let ass = [
                                    ['Vans', 'Ônibus', 'Conjunto'], 
                                    [1200, 1000]
                                ];
                                ass[1][2] = ass[1][0] + ass[1][1];
                                document.querySelectorAll('.assibtn').forEach(function (label, index) {
                                    label.addEventListener('click', function () {
                                        document.getElementById('A_AssBtn').checked = index === 0;
                                        document.getElementById('B_AssBtn').checked = index === 1;
                                        document.getElementById('C_AssBtn').checked = index === 2;

                                        document.querySelectorAll('.assibtn').forEach(function (lbl, i) {
                                            lbl.classList.toggle('selecionado', i === index);
                                        });

                                        document.getElementById('price').textContent = 'Para empresas de '+ass[0][index]+': R$'+ass[1][index]+',00 pelo cadastro';
                                    });
                                });
                            </script>
                    </div>
                    <div class="scrool">
                        <input name="CeoNameCAD" type="text" placeholder="Nome do CEO" />
                        <input name="EmpNameCAD" type="text" placeholder="Nome da Empresa" />
                        <input name="CtEmailCAD" type="email" placeholder="E-mail de Contato" />
                        <input name="CeoCNPJCAD" type="text" id="CNPJ" placeholder="CNPJ" maxlength="17"/>
                            <script>
                                let ess = false;
                                document.addEventListener("keydown", function(event){
                                    if(event.key === "Backspace"){
                                        ess = true;
                                    }else{
                                        ess = false;
                                    }
                                });
                                document.querySelector('#CNPJ').addEventListener('input', ()=>{
                                    let input = document.querySelector('#CNPJ');
                                    let possAtl = input.value.length-1;
                                    let Ver = input.value.slice(-1) == '_' || input.value.slice(-1) == '-' ? false:input.value.slice(-1);
                                    let Ver2 = Ver==false? false:isNaN(Ver);
                                    if(Ver2==true){
                                        input.value = input.value.substr(0, possAtl);
                                    }else if(possAtl==1 || possAtl==5){
                                        if(!ess){
                                            input.value += ".";
                                        }else{
                                            input.value = input.value.substr(0, possAtl);
                                        }
                                    }else if(possAtl==8){
                                        if(!ess){
                                            input.value += "/0001-";
                                        }else{
                                            input.value = input.value.substr(0, possAtl);
                                        }
                                    };
                                });
                            </script>
                        <input name="NewPassCAD" type="password" placeholder="Senha" minlength="5"/>
                        <input name="CofPassCAD" type="password" placeholder="Confirmar Senha" minlength="5"/>
                        <input name="ImgFileCAD" type="file" id="fotoLogoCad" accept="image/*" />
                        <div class="toggle-pill-dark" id="dranwcheck">
                            <input type="checkbox" id="checkSegure" onclick="TurnCheckBtn(this, 1)">
                            <label for="checkSegure"></label>
                            <span onclick="redirectNewPage('Contract.pdf')">Você aceita os termos de uso?</span>
                        </div>
                            <script>
                                function TurnCheckBtn(button, dranw) {
                                    let btn = document.querySelector('#btnEnviarCad');
                                    let fun = dranw == 1 ? 0 : 1;
                                    let textOn = "TurnCheckBtn(this, " + fun + ")";
                                    button.setAttribute('onclick', textOn);
                                    btn.disabled = dranw == 0;
                                }; 
                            </script>
                        
                        <label class="btnFile" for="fotoLogoCad" id="btnimageFun"><i class="fa-solid fa-angles-up"></i><i class="fa-solid fa-image"></i> Enviar logo</label>
                            <script>
                                $("#fotoLogoCad").change(function(){
                                    let btn = document.querySelector('#btnimageFun');
                                    btn.setAttribute('class', 'btnFile disBtn');
                                    btn.setAttribute('for', '');
                                    btn.innerHTML = '<i class="fa-solid fa-image"></i>logo Enviada';
                                });
                            </script>
                    </div>
                    <input name="CADbtn" type="submit" value="Cadastrar" id="btnEnviarCad" disabled>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Bem Vindo, de volta!</h1>
                        <p>Entre, e use o nosso total</p>
                        <button class="ghost" id="signIn">Entre</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Olá, interessado!</h1>
                        <p>Seja bem-vindo, a nossa plataforma</p>
                        <button class="ghost" id="signUp">Cadastra-se</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');
        const Overs = [
            document.querySelector('.overlay-container'), 
            document.querySelector('.overlay')
        ];

        signUpButton.addEventListener('click', () => {
            Overs[0].style.animation = 'scroll 0.5s linear';
            Overs[1].style.animation = 'scrollA 0.5s linear';
            
            setTimeout(() => {
                container.setAttribute('class', 'container right-panel-active');
                Overs[0].style.animation = '';
                Overs[1].style.animation = '';
            }, 500);
        });

        signInButton.addEventListener('click', () => {
            Overs[0].style.animation = 'scroll 0.5s linear reverse';
            Overs[1].style.animation = 'scrollA 0.5s linear reverse';
            
            setTimeout(() => {
                container.setAttribute('class', 'container');
                Overs[0].style.animation = '';
                Overs[1].style.animation = '';
            }, 500);
        });

        window.onload = ()=>{
            <?php
                $fun = $_GET['log'];
                if($fun == 1){
                    echo '
                        signUpButton.click();     
                    ';
                }
            ?>
        };
    </script>
<?php 
    $html->foot();

    if(isset($_POST['CADbtn'])){
        $userCad = array($_POST['CeoNameCAD'], $_POST['EmpNameCAD'], $_POST['CtEmailCAD'], $_POST['CeoCNPJCAD'], $_POST['NewPassCAD'], $_POST['CofPassCAD'], $_FILES['ImgFileCAD'], $_POST['assCAD']);

        if(!in_array('', $userCad) && $userCad[4] == $userCad[5] && isset($userCad[6]) && !empty($userCad[6]['name'])){
            $partes = explode('.', $userCad[6]['name']);
            $extensao = end($partes);
            
            $imgLocal = 'assets/imgs/imgsBank/'.$userCad[0].'_'.$userCad[1].'Logo.'.$extensao;
            $FolderFile = 'assets/imgs/imgsBank/';
            $NameFile = $userCad[0].'_'.$userCad[1].'Logo.'.$extensao;

            $imgVer = $html->upload($userCad[6], $FolderFile, $NameFile);
            if($imgVer != true){
                $html->mensage('Erro no upload!');
                if($imgVer != false){
                    $html->mensage($imgVer);
                }
            }else{
                $userCad[6] = $imgLocal;
                $date = array('NM_Provedora', 'NE_Email', 'CD_CNPJ', 'AS_Assinatura', 'IM_Logo', 'NM_CEO', 'Key_senha');
                $Verifcs = array(0, 1, 2);
                $Configs = array(array('OR', 'OR'));
                //reordem de UserCad
                $userFinal = array($userCad[1], $userCad[2], $userCad[3], $userCad[7], $userCad[6], $userCad[0], $html->Cripto($userCad[4]));

                $UserAction = new BankUse();
                $UserAction->NameTable = 'provedora';
                $UserAction->Dates = $date;
                
                $UserFun = $UserAction->InsertUser($pdo, $userFinal, $Verifcs, $Configs);
                if($UserFun == 'sucesso'){
                    $html->mensage($UserFun);
                }else{
                    $html->mensage($UserFun);
                    if(unlink($userCad[6])){}else{
                        $html->mensage("EROR 404");
                    }
                }
            }
        }else if($userCad[4] != $userCad[5]){
            $html->mensage("Escreva a mesma senha para confirmar!");
        }else if(!isset($userCad[6]) || empty($userCad[6]['name'])){
            $html->mensage("Envie uma imagem!");
        }else{
            $html->mensage("Há campos vazios");
        }
    }

    if(isset($_POST['Logbtn'])){
        $userLog = array($_POST['LogBases'], $_POST['LogEmail'], $_POST['LogPassW']);
        if(!in_array('', $userLog)){
            $date = array('NM_Provedora', 'NE_Email', 'CD_CNPJ', 'AS_Assinatura', 'IM_Logo', 'NM_CEO', 'Key_senha');
            $where = "WHERE (".$date[0]." = '".$userLog[0]."' AND ".$date[1]." = '".$userLog[1]."') OR (".$date[2]." = '".$userLog[0]."' AND ".$date[1]." = '".$userLog[1]."');";
            
            $UserAction = new BankUse();
            $UserAction->NameTable = 'provedora';
            $UserAction->Dates = $date;
            
            $UserFun = $UserAction->GetUser($pdo, "", $where);

            if(is_string($UserFun)){
                $html->mensage($UserFun);
            }else{
                $a = 0;
                foreach($UserFun as $row){
                    $_SESSION['user'][$a] = $row;
                    $a++;
                }
                if($html->CriptoVer($userLog[2], $_SESSION['user'][0]['Key_senha']) == true){
                    echo "<script>redirect('AdmBuss.php');</script>";
                }else{
                    $html->mensage('Senha Incorreta');
                    $_SESSION['user'] = array();
                }
            }
        }else{
            $html->mensage("Há campos vazios!");
        }
    }

?>

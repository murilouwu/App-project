<?php
	include('assets/php/PhpMain.php');
	$html = new HtmlBased();
    $html->HeaderEcho(
        'Recuperar senha', 
        [
            [0, 'http-equiv="X-UA-Compatible" content="IE=edge"'],
            [0, 'name="viewport" content="width=device-width, initial-scale=1.0"'],
            [1, 'assets/css/resPass.css'],
            [2, 'assets/java/script.js'],
            [2, 'https://kit.fontawesome.com/39cab4bf95.js', 'crossorigin="anonymous"'],
            [2, 'https://code.jquery.com/jquery-3.2.1.slim.js', 'integrity="sha256-tA8y0XqiwnpwmOIl3SGAcFl2RvxHjA8qp0+1uCGmRmg=" crossorigin="anonymous"'],
        ],
        'assets/imgs/Logo.png'
    );

    if(isset($_GET['pass'])){
        unset($_SESSION['pass']);
    }
?>
    <body>
        <a class="btnBack" href="login.php?log=0"><i class="fa-solid fa-backward"></i><span>Voltar para o login</span></a>
        <div class="block">
            <?php
                if(!isset($_SESSION['pass'])){
                    echo '
                        <div class="DesBlock">
                            <i class="fa-solid fa-lock"></i>
                            <h1>Esqueceu a senha?</h1>
                            <h3>Você pode modificar-lá por aqui!</h3>
                        </div>
                        <form method="post" class="mainBlock">
                            <div class="inputUl">
                                <i class="fa-solid fa-envelope"></i>
                            <input type="email" name="Email" placeholder="E-mail cadastrado no site" id="inputA">
                            </div>
                            <input type="submit" value="Enviar" name="Enviar0">
                        </form>
                        <script>
                            window.onload = ()=>{
                                let input = document.querySelector("#inputA");
                                input.focus();
                            }
                        </script>
                    ';
                }else{
                    if($_SESSION['pass'] == 0){
                        echo '
                            <form method="post" class="bgWhite">
                                <div class="title">Vericar Código</div>
                                <div class="formBolcs" method="post">
                                    <input id="inputA" class="otp" type="text" oninput="digitValidate(this)" onkeyup="tabChange(1)" maxlength="1" name="inA">
                                    <input class="otp" type="text" oninput="digitValidate(this)" onkeyup="tabChange(2)" maxlength="1" name="inB">
                                    <input class="otp" type="text" oninput="digitValidate(this)" onkeyup="tabChange(3)" maxlength="1" name="inC">
                                    <input class="otp" type="text" oninput="digitValidate(this)" onkeyup="tabChange(4)" maxlength="1" name="inD">
                                </div>
                                <input type="submit" value="Verificar" name="Enviar1">
                            </form>
                            <script>
                                window.onload = ()=>{
                                    let input = document.querySelector("#inputA");
                                    input.focus();
                                }
                                let digitValidate = function(ele){
                                    console.log(ele.value);
                                    ele.value = ele.value.replace(/[^0-9]/g, "");
                                }
                
                                let tabChange = function(val){
                                    let ele = document.querySelectorAll("input");
                                    if(ele[val-1].value != ""){
                                        ele[val].focus()
                                    }else if(ele[val-1].value == ""){
                                        ele[val-2].focus()
                                    }   
                                }
                            </script>
                        ';
                    }else if($_SESSION['pass'] == 1){
                        echo '
                            <div class="DesBlock">
                                <i class="fa-solid fa-user-lock" style="font-size: 10vh;"></i>
                                <h1>Mudar Senha</h1>
                                <h3>Mude sua senha, para algo que consiga lembrar!</h3>
                            </div>
                            <form method="post" class="mainBlock">
                                <div class="inputUl" style="margin-top: 3vh; margin-bottom: 1vh;">
                                    <i class="fa-solid fa-lock"></i>
                                    <input type="password" name="pass" placeholder="Nova senha" id="inputA">
                                </div>
                                <div class="inputUl" style="margin-top: 1vh;">
                                    <i class="fa-solid fa-anchor-lock"></i>
                                    <input type="password" name="pass" placeholder="Confirmar nova senha">
                                </div>
                                <input type="submit" value="Mudar" name="Enviar2">
                            </form>
                            <script>
                                window.onload = ()=>{
                                    let input = document.querySelector("#inputA");
                                    input.focus();
                                }
                            </script>
                        ';
                    }
                }
            ?>
        </div>
    </body>
<?php
    $html->foot();
    if(isset($_POST['Enviar0'])){
        //criar code;
        //enviar no email;
        $_SESSION['pass'] = 0;
        $html->Atalho('resurck.php');
    }
    if(isset($_POST['Enviar1'])){
        //verificar code;
        //reage a verificação;
        $_SESSION['pass'] = 1;
        $html->Atalho('resurck.php');
    }
    if(isset($_POST['Enviar2'])){
        //atualizar senha
        echo '
            <script>
                alert("Pronto");
                redirect("login.php?log=0");
            </script>
        ';
    }
?>
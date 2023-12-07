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
?>
    <body>
        <button class="btnBack" onclick="redirect('login.php')"><i class="fa-solid fa-backward"></i><span>Voltar para o login</span></button>
        <div class="block">
            <?php
                if(isset($_GET['pass'])){
                    if($_GET['pass'] == 0){
                        echo '
                            <div class="bgWhite">
                                <div class="title">Vericar Código</div>
                                <form method="post">
                                    <input class="otp" type="text" oninput="digitValidate(this)" onkeyup="tabChange(1)" maxlength="1" name="inA">
                                    <input class="otp" type="text" oninput="digitValidate(this)" onkeyup="tabChange(2)" maxlength="1" name="inB">
                                    <input class="otp" type="text" oninput="digitValidate(this)" onkeyup="tabChange(3)" maxlength="1" name="inC">
                                    <input class="otp" type="text" oninput="digitValidate(this)" onkeyup="tabChange(4)" maxlength="1" name="inD">
                                </form>
                                <input type="submit" value="Verificar" name="Enviar1">
                            </div>
                        ';
                    }
                }else{
                    echo '
                        <div class="DesBlock">
                            <i class="fa-solid fa-lock"></i>
                            <h1>Esqueceu a senha?</h1>
                            <h3>Você pode modifica-lá por aqui!</h3>
                        </div>
                        <form method="post" class="mainBlock">
                            <div class="inputUl">
                                <i class="fa-solid fa-envelope"></i>
                                <input type="email" name="Email" placeholder="Email cadastrado no site">
                            </div>
                            <input type="submit" value="Enviar" name="Enviar0">
                        </form>
                    ';
                }
            ?>
            
            <script>
                let digitValidate = function(ele){
                    console.log(ele.value);
                    ele.value = ele.value.replace(/[^0-9]/g,'');
                }

                let tabChange = function(val){
                    let ele = document.querySelectorAll('input');
                    if(ele[val-1].value != ''){
                        ele[val].focus()
                    }else if(ele[val-1].value == ''){
                        ele[val-2].focus()
                    }   
                }
            </script>
        </div>
    </body>
<?php
    $html->foot(); 
?>
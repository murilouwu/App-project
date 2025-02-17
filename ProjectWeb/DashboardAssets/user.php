<?php
    include('../assets/php/PhpMain.php');
    $html = new HtmlBased();
    $html->HeaderEcho(
        'Perfil', 
        [
            [0, 'http-equiv="X-UA-Compatible" content="IE=edge"'],
            [0, 'name="viewport" content="width=device-width, initial-scale=1.0"'],
            [1, '../assets/css/ADM.css'],
            [2, '../assets/java/script.js'],
            [2, 'https://kit.fontawesome.com/39cab4bf95.js', 'crossorigin="anonymous"'],
            [2, 'https://code.jquery.com/jquery-3.2.1.slim.js', 'integrity="sha256-tA8y0XqiwnpwmOIl3SGAcFl2RvxHjA8qp0+1uCGmRmg=" crossorigin="anonymous"'],
            [1, 'https://fonts.googleapis.com/css?family=Montserrat:700']
        ],
        '../assets/imgs/Logo.png'
    );
?>
    <style>
        img {
            height: 100%;
            width: auto;
        }

        input[type=submit] {
            background: var(--corB);
            padding: 2vh 1vw 2vh 1vw;
        }

        input{
            margin: 0vh 0vw 1vh 0vw;
            width: 100%;
        }

        figure {
            overflow: hidden;
            position: relative;
            width: 40%;
            filter: sepia(49%) saturate(59%) contrast(86%);
        }

        form {
            overflow: hidden;
            position: relative;
            width: 60%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
        }

        main {
            margin: 30px auto auto;
            overflow: hidden;
            position: relative;
            width: 90%;
        }

        .headline {
            position: absolute;
            top: 18vh;
            width: 40%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
            .headline img{
            height: 23vh;
            width: 23vh;
            background-color: var(--corD);
            border-radius: 100vh;
            border: 5px solid var(--corC);
            }

        body {
            background: var(--corD);
            font: 700 16px 'Montserrat', sans-serif;
        }

        input{
            background: none;
            border: none;
            border-bottom: 2px solid var(--corB);
            box-sizing: border-box;
            outline: none;
        }

        input:required{
            box-shadow: none;
            outline: none;
        }

        input[type=submit] {
            background: var(--corB);
            border: none;
            color: var(--corC);
            width: 50%;
        }

        input[type=submit]:hover, input[type=submit]:focus {
            background: var(--corA);
            cursor: pointer;
            outline: none;
        }

        .inputs--filled label {
            transform: translate(0, 0);
        }

        .inputs--invalid input {
            animation: shake 0.3s cubic-bezier(.36,.07,.19,.97) both;
            background: url(//my-assets.netlify.com/codepen/dailyui-001/ico-invalid.svg) center right no-repeat;
            border-bottom: 2px solid var(--corD);
            box-shadow: none;
            color: var(--corD);
            transform: translate3d(0, 0, 0);
        }

        @keyframes shake {
            0%, 100% {
                transform: translate3d(0, 0, 0);
            }

            33% {
                transform: translate3d(-6px, 0, 0);
            }

            66% {
                transform: translate3d(6px, 0, 0);
            }
        }

        .inputs--invalid label {
            color: var(--corD);
        }

        label {
            display: inline-block;
            transform: translate(0, 1.25rem);
            transition: 0.15s;
        }

        main {
            background: var(--corC);
            border-radius: 0.25rem;
            box-shadow: 0 6px 22px rgba(0, 0, 0, 0.1);
            width: 80vw;
            height: 80vh;
            flex-direction: row;
            display: flex;
        }

        .text-headline {
            color: var(--corC);
            letter-spacing: 0.3vw;
            font: 700 1.4em 'Montserrat';
            text-align: center;
            text-transform: uppercase;
            font-size: 5vh;
        }

        .text-body {
            color: var(--corB);
            font: 700 16px 'Montserrat', sans-serif;
        }

        .text-small-uppercase {
            color: var(--corB);
            font: 700 .75rem 'Montserrat';
            letter-spacing: .08rem;
        }

        .text-subheadline {
            color: var(--corA);
            letter-spacing: 0.2vw;
            font: 700 0.652rem 'Montserrat';
            margin-bottom: 1vh;
            position: relative;
            text-align: center;
            text-transform: uppercase;
            font-size: 2vh;
        }

        .mainform{
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 6vh 1vw 5vh 1vw;
        }

        .btnFile{
            border-radius: 20px;
            border: none;
            background-color: var(--corB);
            color: var(--corD);
            font-size: 3vh;
            font-weight: bold;
            padding: 2vh 2vw;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;
            width: 100%;
            margin-bottom: 2vh;
            text-align: center;
            margin-bottom: 8vh;
        }
            .btnFile:hover{
                border: 2px solid var(--corC);
                cursor: pointer;
            }
            .btnFile:focus {
                outline: none;
            }
            .disBtn{
                background-color: var(--corC);
                color: var(--corB);
                font-weight: 100;
                box-shadow: 0px 0px 0px 3px var(--corB);
            }
                .disBtn:hover{
                    border: none;
                    cursor: default;
                }
                .disBtn:focus {
                    outline: none;
                }
    </style>
    <body>
        <main>
        <figure>
            <picture>
                <img src="https://raw.githubusercontent.com/murilouwu/CronometraisIMGS/main/map.png"/>
            </picture>
        </figure>
        <div class="headline">
            <img src="../<?php echo $_SESSION['user'][0]['IM_Logo'];?>">
            <h2 class="text-headline">Editar Perfil</h2>
            <h3 class="text-subheadline"><?php echo $_SESSION['user'][0]['NM_CEO'];?>, edite seu perfil aqui!</h2>
        </div>
        <form method="post" enctype="multipart/form-data">
            <input name="ImgFileCAD" type="file" id="fotoLogoCad" accept="image/*"/>
            <div class="mainform">
                <label class="btnFile" for="fotoLogoCad" id="btnimageFun"><i class="fa-solid fa-angles-up"></i><i class="fa-solid fa-image"></i> Mudar logo</label>
                <script>
                    $("#fotoLogoCad").change(function(){
                        let btn = document.querySelector('#btnimageFun');
                        btn.setAttribute('class', 'btnFile disBtn');
                        btn.setAttribute('for', '');
                        btn.innerHTML = '<i class="fa-solid fa-image"></i>Nova Logo Pronta';
                    });
                </script>
                <span>
                    <label for="NewNameEmpress" class="text-small-uppercase">Nome da empresa (<?php echo $_SESSION['user'][0]['NM_Provedora'];?>)</label>
                    <input class="text-body" id="NewNameEmpress" name="NameEmpres" type="text">
                </span>
                <span>
                    <label for="NewCEOInput" class="text-small-uppercase">Nome do CEO (<?php echo $_SESSION['user'][0]['NM_CEO'];?>)</label>
                    <input class="text-body" id="NewCEOInput" name="CEO" type="text">
                </span>
                <span>
                    <label for="NewpassInput" class="text-small-uppercase">Senha</label>
                    <input class="text-body" id="NewpassInput" name="pass" type="password">
                </span>
            </div>
            <input class="text-small-uppercase" name="submitEdit" type="submit" value="editar">
            <input class="text-small-uppercase" name="submitDel" type="submit" value="Deletar Conta">
        </form>
        <script>
            var inputs = document.querySelectorAll( 'input[type=text], input[type=password]');
            for (i = 0; i < inputs.length; i ++) {
                var inputEl = inputs[i];
                if( inputEl.value.trim() !== '' ) {
                    inputEl.parentNode.classList.add( 'input--filled' );
                }
                inputEl.addEventListener( 'focus', onFocus );
                inputEl.addEventListener( 'blur', onBlur );
            }

            function onFocus(ev) {
                ev.target.parentNode.classList.add( 'inputs--filled' );
            }

            function onBlur(ev) {
                if ( ev.target.value.trim() === '' ) {
                    ev.target.parentNode.classList.remove( 'inputs--filled' );
                } else if ( ev.target.checkValidity() == false ) {
                    ev.target.parentNode.classList.add( 'inputs--invalid' );
                    ev.target.addEventListener( 'input', liveValidation );
                } else if ( ev.target.checkValidity() == true ) {
                    ev.target.parentNode.classList.remove( 'inputs--invalid' );
                    ev.target.addEventListener( 'input', liveValidation );
                }
            }

            function liveValidation(ev) {
                if ( ev.target.checkValidity() == false ) {
                    ev.target.parentNode.classList.add( 'inputs--invalid' );
                } else {
                    ev.target.parentNode.classList.remove( 'inputs--invalid' );
                }
            }

            var submitBtn = document.querySelector( 'input[type=submit]' );
            submitBtn.addEventListener( 'click', onSubmit );

            function onSubmit(ev){
                var inputsWrappers = ev.target.parentNode.querySelectorAll( 'span' );
                for (i = 0; i < inputsWrappers.length; i ++) {
                    input = inputsWrappers[i].querySelector( 'input[type=text], input[type=password]' );
                    if ( input.checkValidity() == false ) {
                    inputsWrappers[i].classList.add( 'inputs--invalid' );
                    } else if ( input.checkValidity() == true ) {
                    inputsWrappers[i].classList.remove( 'inputs--invalid' );
                    }
                }
            }
        </script>
        </main>
    </body>
<?php 
    $html->foot();
    if(isset($_POST['submitEdit'])){
        if(!empty($_POST['NameEmpres']) && !empty($_POST['CEO']) && !empty($_POST['pass'])){
            $newName = !empty($_POST['NameEmpres']) ? $_POST['NameEmpres']: $_SESSION['user'][0]['NameEmpres'];
            $newCEO = !empty($_POST['CEO']) ? $_POST['CEO']: $_SESSION['user'][0]['CEO'];
            $newPass = !empty($_POST['pass']) ? $_POST['pass']: $_SESSION['user'][0]['pass'];

            // Inicializa a classe BankUse
            $userAction = new BankUse();
            $userAction->NameTable = 'provedora';
            $userAction->Dates = array('NM_Provedora', 'NM_CEO', 'Key_senha');

            // Atualiza os dados na tabela
            $updateData = array('NM_Provedora', 'NM_CEO', 'Key_senha');
            $values = array('NM_Provedora' => $newName, 'NM_CEO' => $newCEO, 'Key_senha' => $html->Cripto($newPass));
            $where = 'CD_Provedora = ' . $_SESSION['user'][0]['CD_Provedora'];

            $result = $userAction->UpdateUser($pdo, $updateData, $values, $where);

            if($result === 'sucesso.'){
                $html->mensage("Dados atualizados com sucesso!");
            } else {
                $html->mensage("Erro ao atualizar os dados");
            }
        }else{
            $html->mensage("Para editar prencha pelo menos um campo.");
        }
    }
?>
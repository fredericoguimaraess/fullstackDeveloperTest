<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            // Quando o valor do input file é alterado
            $('.input-file').change(function() {
                // Atualiza o texto do elemento com o nome do arquivo selecionado
                var fileName = $(this).val().split('\\').pop();
                $('.text-wrapper-18').text(fileName || 'Nenhum arquivo escolhido');
            });
        });
    </script>
    <title>LQDI</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
        .landing-page {
            background-color: #f1f4f9;
            display: flex;
            flex-direction: row;
            justify-content: center;
            width: 100%;
        }

        .landing-page .div {
            background-color: #f1f4f9;
            overflow: hidden;
            width: 1280px;
            height: 2874px;
            position: relative;
        }

        .landing-page .overlap {
            position: absolute;
            width: 100%;
            height: 2713px;
            top: 161px;
            left: 0;
        }

        .landing-page .rectangle {
            position: absolute;
            width: 100%;
            height: 1961px;
            top: 568px;
            left: 0;
            background-color: #ffffff;
        }

        .landing-page .line {
            position: absolute;
            width: 100%;
            height: 2px;
            top: 566px;
            left: 0;
        }

        .landing-page .group {
            position: absolute;
            width: 423px;
            height: 166px;
            top: 1589px;
            left: 30px;
        }

        .landing-page .text-wrapper {
            position: absolute;
            width: 415px;
            height: 120px;
            top: 0;
            left: 0;
            font-family: "Plus Jakarta Sans", Helvetica;
            font-weight: 600;
            color: #080808;
            font-size: 32px;
            letter-spacing: 0;
            line-height: normal;
        }

        .landing-page .p {
            position: absolute;
            width: 419px;
            height: 25px;
            top: 141px;
            left: 0;
            font-family: "Plus Jakarta Sans", Helvetica;
            font-weight: 500;
            color: #08111e;
            font-size: 20px;
            letter-spacing: 0;
            line-height: normal;
        }

        .landing-page .group-2 {
            position: absolute;
            width: 509px;
            height: 289px;
            top: 31px;
            left: 10px;
        }

        .landing-page .building-strategy {
            position: absolute;
            width: 500px;
            height: 127px;
            top: 8px;
            left: 2px;
        }

        .landing-page .text-wrapper-2 {
            position: absolute;
            width: 505px;
            height: 25px;
            top: 166px;
            left: 0;
            font-family: "Plus Jakarta Sans", Helvetica;
            font-weight: 500;
            color: #08111e;
            font-size: 20px;
            letter-spacing: 0;
            line-height: normal;
        }

        .landing-page .overlap-group-wrapper {
            position: absolute;
            width: 152px;
            height: 52px;
            top: 237px;
            left: 0;
        }

        .landing-page .overlap-group {
            position: relative;
            width: 150px;
            height: 52px;
            background-color: #0ab2b7;
            border-radius: 40px;
        }

        .landing-page .text-wrapper-3 {
            position: absolute;
            height: 20px;
            top: 16px;
            left: 39px;
            font-family: "Plus Jakarta Sans", Helvetica;
            font-weight: 700;
            color: #ffffff;
            font-size: 16px;
            letter-spacing: 0;
            line-height: normal;
        }

        .landing-page .group-3 {
            position: absolute;
            width: 100%;
            height: 702px;
            top: 0;
            left: 400px;
        }

        .landing-page .img {
            position: absolute;
            width: 280px;
            height: 268px;
            top: 0;
            left: 300px;
            object-fit: cover;
        }

        .landing-page .rectangle-2 {
            position: absolute;
            width: 280px;
            height: 268px;
            top: 434px;
            left: 0;
            object-fit: cover;
        }

        .landing-page .rectangle-3 {
            position: absolute;
            width: 280px;
            height: 414px;
            top: 288px;
            left: 300px;
            object-fit: cover;
        }

        .landing-page .rectangle-4 {
            position: absolute;
            width: 280px;
            height: 347px;
            top: 98px;
            left: 601px;
            object-fit: cover;
        }

        .landing-page .group-4 {
            position: absolute;
            width: 321px;
            height: 556px;
            top: 833px;
            left: 50px;
        }

        .landing-page .rectangle-5 {
            position: absolute;
            width: 317px;
            height: 260px;
            top: 0;
            left: 0;
            object-fit: cover;
        }

        .landing-page .text-wrapper-4 {
            position: absolute;
            width: 317px;
            height: 60px;
            top: 296px;
            left: 0;
            font-family: "Plus Jakarta Sans", Helvetica;
            font-weight: 700;
            color: #08111e;
            font-size: 24px;
            letter-spacing: 0;
            line-height: normal;
        }

        .landing-page .text-wrapper-5 {
            position: absolute;
            width: 317px;
            height: 88px;
            top: 375px;
            left: 0;
            font-family: "Satoshi-Regular", Helvetica;
            font-weight: 400;
            color: #08111e;
            font-size: 16px;
            letter-spacing: 0;
            line-height: normal;
        }

        .landing-page .group-5 {
            position: absolute;
            width: 128px;
            height: 19px;
            top: 537px;
            left: 0;
        }

        .landing-page .text-wrapper-6 {
            position: absolute;
            height: 19px;
            top: 0;
            left: 0;
            font-family: "Plus Jakarta Sans", Helvetica;
            font-weight: 700;
            color: #101113;
            font-size: 15px;
            letter-spacing: 0;
            line-height: normal;
        }

        .landing-page .icon {
            position: absolute;
            width: 11px;
            height: 11px;
            top: 6px;
            left: 116px;
        }

        .landing-page .group-6 {
            position: absolute;
            width: 321px;
            height: 556px;
            top: 833px;
            left: 400px;
        }

        .landing-page .text-wrapper-7 {
            position: absolute;
            width: 317px;
            height: 90px;
            top: 296px;
            left: 0;
            font-family: "Plus Jakarta Sans", Helvetica;
            font-weight: 700;
            color: #08111e;
            font-size: 24px;
            letter-spacing: 0;
            line-height: normal;
        }

        .landing-page .text-wrapper-8 {
            position: absolute;
            width: 317px;
            height: 88px;
            top: 405px;
            left: 0;
            font-family: "Satoshi-Regular", Helvetica;
            font-weight: 400;
            color: #08111e;
            font-size: 16px;
            letter-spacing: 0;
            line-height: normal;
        }

        .landing-page .overlap-wrapper {
            position: absolute;
            width: 100%;
            height: 644px;
            top: 790px;
            left: 750px;
        }

        .landing-page .overlap-2 {
            position: relative;
            width: 480px;
            height: 644px;
            background-color: #080808;
            border-radius: 19px;
        }

        .landing-page .div-wrapper {
            position: relative;
            width: 393px;
            height: 78px;
            margin-top: 40px;
            border-radius: 50px;
            background-color: transparent;
        }

        .landing-page .text-wrapper-9 {
            position: absolute;
            width: 100%;
            height: 60px;
            top: 370px;
            left: 60%;
            transform: translate(-50%, -50%);
            font-family: "Plus Jakarta Sans", Helvetica;
            font-weight: 500;
            color: #ffffff;
            font-size: 18px;
            text-align: center;
            letter-spacing: 0;
            line-height: normal;
            background-color: transparent;
            border-radius: 19px;
            border: 2px solid #ffffff;
            border-color: #ffffff;
            outline: none;
        }

        .landing-page .text-wrapper-9.filled {
            background-color: white;
            color: #000000;
        }

        .landing-page .mdi-instagram-wrapper {
            position: absolute;
            width: 48px;
            height: 48px;
            top: 526px;
            left: 40px;
            background-color: #ffffff;
            border-radius: 24px;
        }

        .landing-page .mdi-instagram {
            position: absolute;
            width: 27px;
            height: 27px;
            top: 10px;
            left: 10px;
        }

        .landing-page .fe-facebook-wrapper {
            position: absolute;
            width: 49px;
            height: 48px;
            top: 526px;
            left: 101px;
            background-color: #ffffff;
            border-radius: 24.5px/24px;
        }

        .landing-page .fe-facebook {
            position: absolute;
            width: 26px;
            height: 27px;
            top: 10px;
            left: 11px;
        }

        .landing-page .ri-linkedin-box-fill-wrapper {
            position: absolute;
            width: 48px;
            height: 48px;
            top: 526px;
            left: 162px;
            background-color: #ffffff;
            border-radius: 24px;
        }

        .landing-page .ri-linkedin-box-fill {
            position: absolute;
            width: 27px;
            height: 27px;
            top: 10px;
            left: 11px;
        }

        .landing-page .text-wrapper-10 {
            position: absolute;
            width: 297px;
            height: 160px;
            top: 58px;
            left: 40px;
            font-family: "Plus Jakarta Sans", Helvetica;
            font-weight: 600;
            color: #ffffff;
            font-size: 32px;
            letter-spacing: 0;
            line-height: normal;
        }

        .landing-page .group-7 {
            position: absolute;
            width: 119px;
            height: 57px;
            top: 445px;
            left: 40px;
        }

        .landing-page .text-wrapper-11 {
            position: absolute;
            width: 117px;
            height: 57px;
            top: 0;
            left: 0;
            font-family: "Plus Jakarta Sans", Helvetica;
            font-weight: 500;
            color: #ffffff;
            font-size: 15px;
            letter-spacing: 0;
            line-height: normal;
        }

        .landing-page .group-8 {
            position: absolute;
            width: 518px;
            height: 722px;
            top: 1584px;
            left: 650px;
        }

        .landing-page .group-8 input.filled {
            border: 2px solid #0999BA;
            border-color: #0999BA;
        }

        .landing-page .group-8 .icon {
            display: none;
            position: absolute;
            width: 20px;
            height: 14px;
            top: 53px;
            left: 490px;
        }

        .landing-page .group-8 .filled .icon {
            position: absolute;
            width: 20px;
            height: 14px;
            top: 53px;
            left: 490px;
            background: url('img/icon.svg') no-repeat;
        }

        .landing-page .rectangle-6 {
            position: absolute;
            width: 480px;
            height: 47px;
            top: 36px;
            left: 0;
            background-color: #f1f4f9;
            border-radius: 60px;
        }

        .landing-page .rectangle-7 {
            position: absolute;
            width: 480px;
            height: 47px;
            top: 139px;
            left: 0;
            background-color: #f1f4f9;
            border-radius: 60px;
        }

        .landing-page .rectangle-8 {
            position: absolute;
            width: 480px;
            height: 47px;
            top: 239px;
            left: 0;
            background-color: #f1f4f9;
            border-radius: 60px;
        }

        .landing-page .rectangle-9 {
            position: absolute;
            width: 480px;
            height: 192px;
            top: 339px;
            left: 0;
            background-color: #f1f4f9;
            border-radius: 10px;
        }

        .landing-page .text-wrapper-12 {
            position: absolute;
            height: 19px;
            top: 0;
            left: 19px;
            font-family: "Plus Jakarta Sans", Helvetica;
            font-weight: 500;
            color: #101113;
            font-size: 15px;
            letter-spacing: 0;
            line-height: normal;
        }

        .landing-page .text-wrapper-13 {
            position: absolute;
            height: 19px;
            top: 103px;
            left: 19px;
            font-family: "Plus Jakarta Sans", Helvetica;
            font-weight: 500;
            color: #101113;
            font-size: 15px;
            letter-spacing: 0;
            line-height: normal;
        }

        .landing-page .text-wrapper-14 {
            position: absolute;
            height: 19px;
            top: 203px;
            left: 19px;
            font-family: "Plus Jakarta Sans", Helvetica;
            font-weight: 500;
            color: #101113;
            font-size: 15px;
            letter-spacing: 0;
            line-height: normal;
        }

        .landing-page .text-wrapper-15 {
            position: absolute;
            height: 19px;
            top: 303px;
            left: 19px;
            font-family: "Plus Jakarta Sans", Helvetica;
            font-weight: 500;
            color: #101113;
            font-size: 15px;
            letter-spacing: 0;
            line-height: normal;
        }

        .landing-page .icon-2 {
            position: absolute;
            width: 20px;
            height: 14px;
            top: 53px;
            left: 490px;
        }

        .landing-page .text-wrapper-16 {
            position: absolute;
            width: 480px;
            height: 20px;
            top: 550px;
            left: 0;
            font-family: "Satoshi-Regular", Helvetica;
            font-weight: 400;
            color: #08111e;
            font-size: 15px;
            letter-spacing: 0;
            line-height: normal;
        }

        .landing-page .group-9 {
            position: absolute;
            width: 124px;
            height: 52px;
            top: 670px;
            left: 0;
        }

        .landing-page .overlap-group-2 {
            position: relative;
            width: 122px;
            height: 52px;
            background-color: #000000;
            border-radius: 40px;
        }

        .landing-page .group-10 {
            position: absolute;
            width: 100%;
            height: 47px;
            top: 589px;
            left: 0;
        }

        .landing-page .overlap-3 {
            position: relative;
            width: 100%;
            height: 47px;
            border-radius: 10px;
        }

        .landing-page .rectangle-10 {
            position: absolute;
            width: 100%;
            height: 47px;
            top: 0;
            left: 0;
            background-color: #f7f7f7;
            border-radius: 10px;
            border: 2px dashed;
            border-color: #3e3e3e66;
            opacity: 0.4;
        }

        .landing-page .rectangle-11 {
            position: absolute;
            width: 164px;
            height: 43px;
            top: 2px;
            left: 2px;
            background-color: #f1f4f9;
            border-radius: 5px;
        }

        .landing-page .text-wrapper-17 {
            position: absolute;
            width: 146px;
            height: 16px;
            top: 16px;
            left: 15px;
            font-family: "Montserrat", Helvetica;
            font-weight: 600;
            color: #10111399;
            font-size: 14px;
            text-align: center;
            letter-spacing: 0;
            line-height: normal;
            white-space: nowrap;
        }

        .landing-page .text-wrapper-18 {
            position: absolute;
            width: 219px;
            height: 15px;
            top: 17px;
            left: 178px;
            font-family: "Montserrat", Helvetica;
            font-weight: 500;
            color: #9aa1ae;
            font-size: 14px;
            letter-spacing: 0;
            line-height: 21px;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .landing-page .group-11 {
            position: absolute;
            width: 100%;
            height: 321px;
            top: 2392px;
            left: 0;
        }

        .landing-page .overlap-4 {
            position: absolute;
            width: 100%;
            height: 321px;
            background-color: #000000;
        }

        .landing-page .brasil-address {
            position: absolute;
            width: 227px;
            height: 100px;
            top: 54px;
            left: 553px;
            font-family: "Satoshi-Bold", Helvetica;
            font-weight: 400;
            color: #ffffff;
            font-size: 15px;
            letter-spacing: 0;
            line-height: normal;
        }

        .landing-page .span {
            font-weight: 700;
        }

        .landing-page .text-wrapper-19 {
            font-family: "Satoshi-Regular", Helvetica;
        }

        .landing-page .portugal-address {
            position: absolute;
            width: 252px;
            height: 80px;
            top: 54px;
            left: 850px;
            font-family: "Satoshi-Bold", Helvetica;
            font-weight: 400;
            color: #ffffff;
            font-size: 15px;
            letter-spacing: 0;
            line-height: normal;
        }

        .landing-page .holanda-address {
            position: absolute;
            width: 252px;
            height: 100px;
            top: 155px;
            left: 850px;
            font-family: "Satoshi-Bold", Helvetica;
            font-weight: 400;
            color: #ffffff;
            font-size: 15px;
            letter-spacing: 0;
            line-height: normal;
        }

        .landing-page .logo-lqdi-positivo {
            position: absolute;
            width: 80px;
            height: 47px;
            top: 54px;
            left: 50px;
            object-fit: cover;
        }

        .landing-page .overlap-5 {
            position: fixed;
            width: 100%;
            height: 46px;
            top: 49px;
            left: 50px;
        }

        .landing-page .group-12 {
            position: absolute;
            width: 100%;
            height: 46px;
            top: -29px;
            left: 0;
        }

        .landing-page .group-13 {
            position: absolute;
            width: 121px;
            height: 42px;
            top: 3px;
            left: 1062px;
        }

        .landing-page .overlap-group-3 {
            position: relative;
            width: 119px;
            height: 42px;
            left: 450px;
            background-color: #000000;
            border-radius: 40px;
        }

        .landing-page .text-wrapper-20 {
            position: absolute;
            height: 18px;
            top: 11px;
            left: 28px;
            font-family: "Plus Jakarta Sans", Helvetica;
            font-weight: 800;
            color: #ffffff;
            font-size: 14px;
            letter-spacing: 0;
            line-height: normal;
        }

        .landing-page .logo-lqdi-positivo-2 {
            position: absolute;
            width: 78px;
            height: 46px;
            top: 0;
            left: 0;
            object-fit: cover;
        }

        .landing-page .text-wrapper-21 {
            position: fixed;
            height: 19px;
            top: 40px;
            left: 1270px;
            font-family: "Plus Jakarta Sans", Helvetica;
            font-weight: 600;
            color: #000000b2;
            font-size: 15px;
            line-height: 18.9px;
        }

        .menu {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 42px;
            background-color: transparent;
            transition: background-color 0.3s ease;
        }

        @import url("https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css");

        * {
            -webkit-font-smoothing: antialiased;
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0px;
            height: 100%;
            width: 100%;
        }

        button:focus-visible {
            outline: 2px solid #4a90e2 !important;
            outline: -webkit-focus-ring-color auto 5px !important;
        }

        a {
            text-decoration: none;
        }

        @import url("https://fonts.googleapis.com/css?family=Plus+Jakarta+Sans:800,500,700,600|Montserrat:500,600");

        @font-face {
            font-family: "Satoshi-Regular";
            src: url("https://anima-uploads.s3.amazonaws.com/projects/63d2c7e0303c5178f866c8eb/fonts/satoshi-regular.otf") format("opentype");
        }

        @font-face {
            font-family: "Satoshi-Bold";
            src: url("https://anima-uploads.s3.amazonaws.com/projects/62fe21e7f2f27787f05ba142/fonts/satoshi-variable.ttf") format("truetype");
        }
    </style>
</head>

<body>
    <div class="landing-page">
        <div id="message"></div>
        <div class="div">
            <div class="overlap">
                <div class="rectangle"></div>
                <img class="line" src="img/line-3.svg" />
                <div class="group">
                    <p class="text-wrapper">Viva uma nova experiência de comunicação integrada com foco nos resultados.</p>
                    <p class="p">Escreva-nos sobre o seu projeto</p>
                </div>
                <div class="group-2">
                    <img class="building-strategy" src="img/constru-mos-estrat-gias-design-e-tecnologia-de-ponta-para-o-seu.png" />
                    <p class="text-wrapper-2">Converse com nossa equipe sobre o seu projeto.</p>
                    <div class="overlap-group-wrapper">
                        <div class="overlap-group">
                            <div class="text-wrapper-3">Começar</div>
                        </div>
                    </div>
                </div>
                <div class="group-3">
                    <img class="img" src="img/rectangle-109.png" />
                    <img class="rectangle-2" src="img/rectangle-112.png" />
                    <img class="rectangle-3" src="img/rectangle-111.png" />
                    <img class="rectangle-4" src="img/rectangle-110.png" />
                </div>
                <div class="group-4">
                    <img class="rectangle-5" src="img/rectangle-113.png" />
                    <a href="https://lqdi.net/por-que-e-importante-ter-um-site-de-qualidade/" target="_blank" rel="noopener noreferrer">
                        <p class="text-wrapper-4">Por que é importante ter um site de qualidade?</p>
                    </a>
                    <p class="text-wrapper-5">
                        Um site de qualidade passou a ser um dos meios de exposição de marca mais eficientes no ambiente online.
                        Ele funciona como uma espécie de cartão...
                    </p>
                    <div class="group-5">
                        <a href="https://lqdi.net/por-que-e-importante-ter-um-site-de-qualidade/" target="_blank" rel="noopener noreferrer">
                            <div class="text-wrapper-6">Ir para o artigo</div>
                        </a>
                        <img class="icon" src="img/icon-1.svg" />
                    </div>
                </div>
                <div class="group-6">
                    <img class="rectangle-5" src="img/rectangle-114.png" />
                    <p class="text-wrapper-7">6 dicas para trabalhar com marketing digital com verba limitada</p>
                    <p class="text-wrapper-8">
                        Um site de qualidade passou a ser um dos meios de exposição de marca mais eficientes no ambiente online.
                        Ele funciona como uma espécie de cartão...
                    </p>
                    <div class="group-5">
                        <div class="text-wrapper-6">Ir para o artigo</div>
                        <img class="icon" src="img/icon-1.svg" />
                    </div>
                </div>
                <div class="overlap-wrapper">
                    <div class="overlap-2">
                        <div class="div-wrapper">
                            <input type="email" id="emailInput" class="text-wrapper-9" placeholder="Escreva aqui seu e-mail..." oninput="updateBackground(this)">
                        </div>
                        <div class="mdi-instagram-wrapper"><img class="mdi-instagram" src="img/mdi-instagram.svg" /></div>
                        <div class="fe-facebook-wrapper"><img class="fe-facebook" src="img/fe-facebook.svg" /></div>
                        <div class="ri-linkedin-box-fill-wrapper">
                            <img class="ri-linkedin-box-fill" src="img/ri-linkedin-box-fill.svg" />
                        </div>
                        <p class="text-wrapper-10">Receba os nossos artigos de interesse na sua caixa de entrada.</p>
                        <div class="group-7">
                            <p class="text-wrapper-11">Siga-nos em nossas mídias sociais</p>
                        </div>
                    </div>
                </div>
                <div class="group-8">
                    <input type="text" id="name" class="rectangle-6" name="name" required oninput="updateField(this, 'nomeIcon')">
                    <input type="text" id="email" class="rectangle-7" name="email" required oninput="updateField(this, 'emailIcon')">
                    <input type="text" id="assunto" class="rectangle-8" name="assunto" required oninput="updateField(this, 'assuntoIcon')">
                    <input type="text" id="mensagem" class="rectangle-9" name="mensagem" required oninput="updateField(this, 'mensagemIcon')">
                    <div class="text-wrapper-12">Seu nome (requerido)<span class="icon" id="nomeIcon" style="background: url('img/icon.svg') no-repeat;"></span></div>
                    <div class="text-wrapper-13">Seu E-mail (requerido)<span class="icon" id="emailIcon" style="background: url('img/icon.svg') no-repeat;"></span></div>
                    <div class="text-wrapper-14">Assunto<span class="icon" id="assuntoIcon" style="background: url('img/icon.svg') no-repeat;"></span></div>
                    <div class="text-wrapper-15">Mensagem </div>
                    <p class="text-wrapper-16">Anexe um documento explicando seu projeto</p>
                    <div class="group-9">
                        <button type="button" class="overlap-group-2" onclick="submitForm()">
                            <div class="text-wrapper-3">Enviar</div>
                        </button>
                    </div>
                    <div class="group-10">
                        <div class="overlap-3">
                            <div class="rectangle-10"></div>
                            <div class="rectangle-11"></div>
                            <label for="arquivo" class="file-label">
                                <input type="file" id="arquivo" class="input-file" style="display: none;">
                                <div class="text-wrapper-17">Escolher Arquivo</div>
                            </label>
                            <div class="text-wrapper-18">Nenhum arquivo escolhido</div>
                        </div>
                    </div>
                </div>
                <div id="result"></div>
                <div class="group-11">
                    <div class="overlap-4">
                        <p class="brasil-address">
                            <span class="span">Brasil<br /></span>
                            <span class="text-wrapper-19">Rua da Consolação, 4393º andar, Consolação São Paulo<br /><br />+55 11 3280-0283</span>
                        </p>
                        <p class="portugal-address">
                            <span class="span">Portugal<br /></span>
                            <span class="text-wrapper-19">Av. República Nº6 - 1º Andar Lisboa<br /><br />+351 916 029 443</span>
                        </p>
                        <p class="holanda-address">
                            <span class="span">Holanda<br /></span>
                            <span class="text-wrapper-19">Jasykoffstraat 631506AT ZaandamThe Netherlands<br /><br />+31 622 333 744</span>
                        </p>
                        <img class="logo-lqdi-positivo" src="img/logo-lqdi-positivo-1-1.png" />
                    </div>
                </div>
            </div>
            <div class="menu">
                <div class="overlap-5">
                    <div class="group-12">
                        <div class="group-13">
                            <div class="overlap-group-3">
                                <div class="text-wrapper-20">Começar</div>
                            </div>
                        </div>
                        <img class="logo-lqdi-positivo-2" src="img/logo-lqdi-positivo-1.png" />
                    </div>
                    <div class="text-wrapper-21">Agende uma reunião conosco</div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                // Obtém a posição de rolagem
                let scroll = $(window).scrollTop();

                // Define a altura em que a mudança de cor deve ocorrer
                let offset = 150;
                let $textWrapper21 = $(".text-wrapper-21");
                // Altera a cor de fundo do menu com base na posição de rolagem
                if (scroll > offset) {
                    $(".menu").css("background-color", "#ffffff"); // Nova cor de fundo
                    $textWrapper21.hide();
                } else {
                    $(".menu").css("background-color", "transparent"); // Cor inicial
                    $textWrapper21.show();
                }
            });
        });

        function updateBackground(input) {
            const filledClass = 'filled';

            if (input.value.trim() !== '') {
                input.classList.add(filledClass);
            } else {
                input.classList.remove(filledClass);
            }
        }

        function updateField(input, iconId) {
            const filledClass = 'filled';
            const iconElement = document.getElementById(iconId);

            if (input.value.trim() !== '') {
                input.classList.add(filledClass);
                iconElement.style.display = 'inline-block';
            } else {
                input.classList.remove(filledClass);
                iconElement.style.display = 'none';
            }
        }

        function submitForm() {
            let name = document.getElementById('name').value;
            let email = document.getElementById('email').value;

            let formData = new FormData();
            formData.append('name', name);
            formData.append('email', email);

            let xhr = new XMLHttpRequest();
            xhr.open('POST', 'http://localhost:8000/api/inscricao', true);

            xhr.onload = function() {
                try {
                    if (xhr.status == 200) {
                        let result = JSON.parse(xhr.responseText);
                        alert('Inscrição ID: ' + result.id);
                    }
                } catch {
                    alert('Erro ao enviar inscrição.');
                }
            };
            xhr.send(formData);
            document.getElementById('name').value = '';
            document.getElementById('email').value = '';
            document.getElementById('assunto').value = '';
            document.getElementById('mensagem').value = '';
        }
    </script>

</body>

</html>
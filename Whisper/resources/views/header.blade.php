<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>[週報ログイン]←ここは受け渡された値によって変わる</title>

        <!-- Styles -->
        <style>
            head{
                position: relative;
            }
            body {
                font-family: "ＭＳ Ｐゴシック";
                font-weight: bold;
                margin: 0 0 0 0;
            }
            input[type="text"] {
                width: 300px;
                height: 50px;
            }
            input[type="password"] {
                width: 300px;
                height: 50px;
            }
            input#login{
                width: 180px;
                zoom: 1.2;
                font-family: "ＭＳ Ｐゴシック";
                font-size: 25px;
                font-weight: bold;
                padding: 10px 30px;
            }
            input#newRegister{
                width: 180px;
                zoom: 1.2;
                font-family: "ＭＳ Ｐゴシック";
                font-size: 25px;
                font-weight: bold;
                padding: 10px 30px;
            }
            .box { 
                width:500px;
                padding: 0.5em 1em;
                margin: 2em 0;
                font-weight: bold;
                background: #FFF;
                border-width: thin;
                border: solid 10px #E9546B;
                border-radius: 90px;
                position: absolute;
                top: 50%;
                left: 50%;
                -ms-transform: translate(-50%,-50%);
                -webkit-transform : translate(-50%,-50%);
                transform : translate(-50%,-50%);
            }
        </style>
    </head>
    <body>

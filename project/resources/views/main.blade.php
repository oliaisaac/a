<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <title>Document</title>
</head>

<body style="background: url(/storage/{{$pathToBackground->path}}); background-size: cover; background-repeat: no-repeat;background-position: center center; background-attachment: fixed; transition: 0.7s;">
    <div class="overlay">
        <header>
            <div class="container main">
                <h3>{{$nameCompany->name}}</h3>
            </div>
        </header>
        <div class="container main">
            <div class="col-7">
                <div id="description">
                    <h1>Продажа <span class="yellow">электрических <br>
                            штабелеров </span>с доставкой по РФ</h1>
                    <p>Получите актуальный <span class="yellow"> каталог </span>штабелеров с ценами</p>
                </div>
                <div>
                    <div class="row start">
                        <button id="tel"><img src="img/logos_telegram.png"><span>Каталог в Telegram</span></button>
                        <button id="wats"><img src="img/dashicons_whatsapp.png"><span>Каталог в WhatsApp</span></button>
                    </div>

                </div>

                <div class="container-mini">
                    <div class="row">
                        <div class="col-3">
                            <img src="{{asset('/storage/'.$pathToBlockImage[0]->path)}}"  class="imgInfo">
                            <p class="textInfo">Гарантия<br> до 5 лет</p>
                        </div>
                        <div class="col-3">
                        
                            <img src="{{asset('/storage/'.$pathToBlockImage[1]->path)}}"  class="imgInfo">
                           
                            <p class="textInfo">Доставка<br> в любой город РФ</p>
                        </div>
                        <div class="col-3">
                            <img src="{{asset('/storage/'.$pathToBlockImage[2]->path)}}"  class="imgInfo">
                            
                            <p class="textInfo">Сервис и запчасти<br> в 72 городах РФ</p>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-5">
                <div class="pages">
                    <button id="but10" csrf="{{csrf_token()}}" onclick="changeBack(10,11,12)"></button>
                    <button id="but11" csrf="{{csrf_token()}}" onclick="changeBack(11,10,12)"></button>
                    <button id="but12" csrf="{{csrf_token()}}" onclick="changeBack(12,10,11)"></button>
                </div>
            </div>

        </div>
    </div>

    <footer>
        <div class="container">
            <p>Все права защищены</p>
        </div>

    </footer>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
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

<body>



    @if(!Auth::check())
    <div class="container admin">
        <div class="centerRow">
            <div id="authAdmin">
                <div class="labelAdmin">
                    <h2>Войти</h2>
                </div>
                <form id="auth">
                    @csrf
                    <input type="text" placeholder="Логин" name="name"><br>
                    <input type="password" placeholder="Пароль" name="password"><br>
                    <button type="submit">Войти</button>
                </form>
            </div>
        </div>
    </div>
    @else
    <div class="panelContainer">
        <div class="panel">

                <li><a href="#" onclick="show('infoCompany','block','background')">Информация</a></li>
                <li><a href="#" onclick="show('block','infoCompany','background')">Блоки</a></li>
                <li><a href="#" onclick="show('background','block','infoCompany')">Фоны</a></li>
            <a href="{{route('logOut')}}">Выйти</a>
        </div>
        <div class="panelEdit">
            
            <h1>Редактировать информацию</h1>
            <div id="infoCompany">
                <form id="editInfo" action="{{route('edit')}}" method="post" enctype="multipart/form-data">
                @csrf
                <h3> Название компании:</h3><input type="text" value="{{$nameCompany->name}}" name="name">
                <button type="submit">Изменить</button>
                </form>
            </div>
            <div id="block">
            <form id="editBlock" action="{{route('photoUpload')}}" method="post" enctype="multipart/form-data">
                @csrf
                <h3> Первый блок информации:</h3><input type="file" name="imageBlock[0]" accept="image/*">
                <h3> Второй блок информации:</h3><input type="file" name="imageBlock[1]" accept="image/*">
                <h3> Третий блок информации:</h3><input type="file" name="imageBlock[2]" accept="image/*"><br><br>
                <button type="submit">Изменить</button>
                </form>
            </div>
            <div id="background">
            <form id="editBack" action="{{route('photoUpload')}}" method="post" enctype="multipart/form-data">
                @csrf
                <h3> Первый фон:</h3><input type="file" name="imageBackground[0]" accept="image/*">
                <h3> Второй фон:</h3><input type="file" name="imageBackground[1]" accept="image/*">
                <h3> Третий фон:</h3><input type="file" name="imageBackground[2]" accept="image/*"><br><br>
                <button type="submit">Изменить</button>
            </form>
            </div>
            
        </div>
    </div>



    @endif



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
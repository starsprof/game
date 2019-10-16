<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>Игра «Найди пару» | 6x6</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        @import url('https://fonts.googleapis.com/css?family=Tinos&subset=cyrillic');

        body {
            background: rebeccapurple;
        }
    </style>


</head>

<body>


<div class="container">
    <div class="content">
        <div class="row">

            <div class="col-md-6  text-center">
                <p class="info-block">Нажмите на любую карту, чтобы начать</p>
                <p id="text"></p>
                <div id="game-block" class="six">
                </div>
                <button id="button-pause" class="btn btn-light btn-pause">Пауза</button>
            </div>
            <div class="col-md-6">
                <div>
                    Время:
                    <span id="seconds">00</span>.<span id="tens">00</span><br>Попытки: <span id="triesid"></span>
                    <br>
                </div>
                <div>
                    <a href="#">Рекорды и сохранение результата</a>
                    <br>
                </div>
                <div>

                    Записать результат
                    <table style="width:200px;" id="tbl">
                        <tr>
                            <td>Имя</td>
                            <td>
                                <input id="txtpname" type="text" class="c1">
                            </td>
                        </tr>
                        <tr>
                            <td>Дата</td>
                            <td>
                                <input type="date" id="txtpaddr" class="c1">
                            </td>
                        </tr>
                        <tr>
                            <td>Очки</td>
                            <td>
                                <input id="txtpcity" type="text" class="c1">
                            </td>

                        </tr>
                        <tr>
                            <td>Размер</td>
                            <td>
                                <select class="c1">
                                    <option value="6">6×6</option>
                                    <option value="8">8×8</option>
                                    <option value="10">10×10</option>
                                    <option value="12">12×12</option>

                                </select>
                            </td>
                        </tr>

                    </table>
                    <p>
                        <input id="btnsave" type="button" value="Сохранить">
                        <input id="btnclear" type="button" value="Очистить поля"><br>
                        <input id="btnclearstorage" type="button" value="Очистить таблицу рекордов">
                    </p>



                    <div id="dvcontainer"></div>
                </div>


            </div>


        </div>
    </div>
</div>



<script src="{{asset('js/LocalStorageLogic.js')}}"></script>
<script src="{{asset('js/games.js')}}"></script>

</body>
</html>
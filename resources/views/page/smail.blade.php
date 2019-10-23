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
                <div class="text-light">
                    Время:
                    <span id="seconds">00</span>.<span id="tens">00</span><br>Попытки: <span id="triesid"></span>
                    <br>
                </div>

                <div class="text-light" style="margin-top: 20px">

                    Записать результат
                    <form id="tbl" style="margin-top: 20px">

                        <div class="form-group row col-md-8">
                            <label  for="inputEmail4" class="col-md-2 col-form-label text-light">Имя</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control c1" id="txtpname" placeholder="Имя">
                            </div>
                        </div>


                        <div class="form-group row col-md-8">
                            <label for="inputPassword4" class="col-md-2 col-form-label text-light">Дата</label>
                            <div class="col-md-8">
                                <input type="date" class="form-control c1" id="txtpaddr" placeholder="Дата">
                            </div>
                        </div>

                        <div class="form-group row col-md-8">
                            <label for="inputPassword4" class="col-md-2 col-form-label text-light">Очки</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control c1" id="txtpcity" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row col-md-8">
                            <label for="inputPassword4" class="col-md-2 col-form-label text-light">Размер</label>
                            <div class="col-md-8">
                                <select class="custom-select mr-sm-2 c1" id="inlineFormCustomSelect">

                                    <option selected value="people">people</option>
                                    <option  value="smail">smail</option>
                                    <option  value="sport">sport</option>
                                </select>
                            </div>
                        </div>
                    </form>
                    <p style="margin: 30px 0">
                        <input id="btnsave" type="button" class="btn btn-primary" value="Сохранить">
                        <input id="btnclear" type="button" class="btn btn-danger" value="Очистить поля">
                        <input id="btnclearstorage" type="button" class="btn btn-warning" value="Очистить таблицу рекордов">
                    </p>
                    <div id="dvcontainer"></div>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="{{asset('js/smail.js')}}"></script>

</body>
</html>


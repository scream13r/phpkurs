<!doctype html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta content="viewport" width="1000"/>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/css/style.css">

    <script src="/js/modernizr-custom.js"></script>
</head>
<body>
<div class="wrapper">
    <nav class="navbar navbar-default">
        <div class="container">
            <a href="#" class="navbar-brand">
                Mikhail Bur.
            </a>


        </div>
    </nav>

    <div class="content-wrapper">
        <div class="container">
            <aside class="sidebar col-md-4">
                <ul class="nav nav-pills nav-stacked">
                    <li role="presentation" class="active"><a href="#">Создать файл</a></li>
                    <li role="presentation" ><a href="#">Загрузить файл</a></li>
                    <li role="presentation"><a href="#">Все файлы</a></li>
                </ul>
            </aside>
            <main class="content col-md-8">

                <form id="form">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Название файла</label>
                        <input type="text" name="fio" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="text">Текст</label>
                        <textarea name="text" class="form-control" id="text"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Отправить</button>
                </form>

                <form id="form">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Название файла</label>
                        <input type="text" name="fio" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="text">Выбор файла</label>
                        <input type="file" name="image" id="image" />
                    </div>
                    <button type="submit" class="btn btn-default">Отправить</button>
                </form>

                <hr>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    </tbody>
                </table>
            </main>
        </div>
    </div>

    <div class="modal fade bs-example-modal-sm" id="success" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                Спасибо, ваш заказ принят!!
            </div>
        </div>
    </div>

    <div class="modal fade bs-example-modal-sm" id="error" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                Что то пошло не так, попробуйте позже
            </div>
        </div>
    </div>


</div>

<script src="https://code.jquery.com/jquery-1.12.3.min.js"
        integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/main.js"></script>
</body>
</html>
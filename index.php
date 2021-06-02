<?php
    require_once ("saveMessages.php");
?>


<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    >
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous"
    >
</head>
<body>

    <div class="container">
        <form id="main-form" method="post" action="" enctype="multipart/form-data">
            <div class="form-group">
                <label for="userName">Имя пользователя *</label>
                <input
                    name="name"
                    type="text"
                    class="form-control"
                    id="userName"
                    placeholder="Введите имя пользователя"
                    required
                >
            </div>

            <div class="form-group">
                <label for="userEmail">E-mail *</label>
                <input
                    name="email"
                    type="email"
                    pattern="(.+@.+\..+)"
                    class="form-control"
                    id="userEmail"
                    placeholder="Введите email"
                    required
                >
            </div>

            <div class="form-group">
                <label for="userMessage">Сообщение *</label>
                <input
                    name="message"
                    type="text"
                    class="form-control"
                    id="userMessage"
                    placeholder="Введите сообщение"
                    required
                >
            </div>

            <div class="form-group">
                <label for="userFile">Выберите файл (*.jpg, *.png)</label>
                <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                <input
                    name="img"
                    type="file"
                    class="form-control"
                    id="userFile"
                    accept="image/jpeg,image/png"
                >
            </div>

            <div id="alert" class="alert alert-success" hidden="true">
                Форма успешно заполнена!
            </div>

            <button id="send" type="submit" class="btn btn-primary">Загрузить</button>
        </form>
    </div>

    <script src="showNotify.js"></script>
</body>
</html>

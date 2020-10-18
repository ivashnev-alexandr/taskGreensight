<html>
<head>
    <meta charset='utf-8'>
    <title>Тестовое задание для Greensight</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        form {
            margin: 10% 35%;
        }
    </style>
</head>
<body>
<form action='registerForm.php' method='POST' name='registerForm'>
    <div class="form-group">
        <label for="inputName">Ваше имя</label>
        <input type="text" class="form-control" id="inputName" name="name">
    </div>
    <div class="form-group">
        <label for="inputSurname">Ваша фамилия</label>
        <input type="text" class="form-control" id="inputSurname" name="surname">
    </div>
    <div class="form-group">
        <label for="inputEmail">E-mail</label>
        <input type="email" class="form-control" id="inputEmail" name="email">
    </div>
    <div class="form-group">
        <label for="inputPassword">Пароль</label>
        <input type="password" class="form-control" id="inputPassword" name="password">
    </div>
    <div class="form-group">
        <label for="inputRetryPassword">Повторите пароль</label>
        <input type="password" class="form-control" id="inputRetryPassword" name="retryPassword">
    </div>
    <input type="submit" class="btn btn-primary" value="Зарегистрироваться">
</form>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src='js/script.js'></script>
</body>
</html>
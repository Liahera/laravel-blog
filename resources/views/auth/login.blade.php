

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Регистрация</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
</head>

<body>

<div class="container">

    <form class="form-signin" method="post">
        {!! csrf_field() !!}
        <h2 class="form-signin-heading">Пожалуйста Войдите</h2>
        <label for="inputEmail" class="sr-only">Email адрес</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email адрес" required autofocus>
        <label for="inputPassword" class="sr-only">Пароль</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Пароль" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="remember" value="1" >  Запомнить
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Войти на сайт</button>
    </form>

</div> <!-- /container -->





</body>
</html>

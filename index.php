<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title>Гостевая книга Куманек А.А.</title>
    <!--Файл class -->
    <link rel = "stylesheet" type = "text/css" href = "css.css"> 
    <!--Файл css bootstrap -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
    <div class="container login-container">
        <div class="row">
            <!--Левый блок -->
            <div class="col-md-6 login-form-1">
                <h3>Войти в Гостевую книгу</h3>
                <form action="auth.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Логин *" name="loginin" required/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Пароль *" name="passwordin" required/>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Войти"/>
                    </div>
                </form>
            </div>
            <!--Правый блок -->
            <div class="col-md-6 login-form-2">
                <h3>Зарегистрироваться в Гостевой книге</h3>
                <form action="register.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Логин *" name="loginout" required/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Почта *" name="emailout" required/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Пароль *" name="passwordout" required/>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Зарегистрироваться"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

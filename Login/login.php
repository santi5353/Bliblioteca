<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/Bliblioteca/Login/src/main.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body class="container">
    <form method="post" acction="">
    <div class="container position-relative mt-5  ">
        <div class="row">
            <div class="col-md-6 mt-5 d-none d-sm-none d-md-block position-relative form box-0 ">
                <img class ="position-relative" src="http://localhost/Bliblioteca/Login/img/idea.png" alt="" width="100%">
            </div>
            <div class="container bg-white p-5 rounded-5 text-secondary shadow position-relative " style="width: 25rem">
                <div class="d-flex justify-content-center">
                    <img src="http://localhost/Bliblioteca/Login/assets/login-icon.svg" alt="login-icon" style="height: 7rem" />
                </div>
                <div class="text-center fs-1 fw-bold">Login</div>
                <?php
                include ("conexion.php");
                include ("controlador.php");
                ?>
                <div class="input-group mt-4">
                    <div class="input-group-text bg-info">
                        <img src="http://localhost/Bliblioteca/Login/assets/username-icon.svg" alt="username-icon" style="height: 1rem" />
                    </div>
                    <input class="form-control bg-light" type="text" name="usuario" placeholder="Username" />
                </div>
                <div class="input-group mt-1">
                    <div class="input-group-text bg-info">
                        <img src="http://localhost/Bliblioteca/Login/assets/password-icon.svg" alt="password-icon" style="height: 1rem" />
                    </div>
                    <input class="form-control bg-light" type="password" name="password"  placeholder="Password" />
                </div>
                <input name="btningresar" class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm" type="submit" value="Login">
                    
            </div>
        </div>

    </div>
</form>
</body>

</html>
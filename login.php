<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/styleLogin.css">
</head>
<body>
    <div class="contentMain">
        <div class="contentImg">
            <img src="img/logo.svg">
        </div>

        <div class="contentLogin">
            <form method="post" action=""> 
                <h2 class="title">BIENVENIDO</h2>
                <?php
                    #include "modelo/conexBd.php";
                    include "controlador/contrlolador_ingreso.php";
                ?>
                <div class="inputUser">
                    <div class="div">
                        <h5>Usuario</h5>
                        <input id="user" type="text" class="input" name="user">
                    </div>
                </div>

                <div class="inputPass">
                    <div class="div">
                        <h5>Contraseña</h5>
                        <input type="password" id="pass" class="input" name="password">
                    </div>
                </div>

                <div class="text-center">
                    <a class="font-italic isai5" href="">Olvidé mi contraseña</a>
                    <a class="font-italic isai5" href="">Registrarse</a>
                </div>

                <input name="btningresar" class="btn" type="submit" value="INICIAR SESION">
            </form>
        </div>
        
    </div>
    
</body>
</html>
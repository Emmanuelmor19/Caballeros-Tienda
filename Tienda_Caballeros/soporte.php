<?php
session_start();
@$iduser = $_SESSION['user_id'];
if($iduser != 0){
    $_SESSION['verify'] = "true";
}
?>

<!DOCTYPE html>
<html lang="es">
<!--
    Code by TheWaterBoo
    Yep, and 100% certified by one-hundred ghosts (~ 0 u 0 )~
    copy of the index
-->
<head>
    <!--HTML con informacion de contacto, esta de relleno por ahora pero luego se le dara mas info :p-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/normalize.css" as="style">
    <!--Cool font 8)-->
    <link href="https://fonts.googleapis.com/css2?family=Hubballi&display=swap" rel="stylesheet">
    <!--Icono para la pestaña-->
    <link rel="icon" href="img/GhostIcon.png">
    <title>Caballeros - Soporte</title>
</head>

<body>
    <!--Este script ↓↓↓ impide usar el clic derecho en la pagina, un script sencillo pero util-->
    <script>
        document.oncontextmenu = function(){
            return false
        }
    </script>

    <!--Se invoca al script para agregar texto al momento de que copian algo-->
    <script src="js/txtcopy.js"></script>

    <header class="header">
        <!--LOGO aqui-->
        <a href="otherindex.php">
            <img class="header__logo" src="img/LogoBeta.png" alt="Logo">
        </a>
        <!--
            //Antiguo "Logo" temporal, reemplazado por un imagen en lugar de texto y una imagen
            <a href="index.html"><img src="GhostIcon.png" width="9%"><h1>Water's Store</h1></a>
        -->
    </header>

    <nav class="barra-nav">
        <!--No es necesario establecer el tamaño de cada imagen, desde estilos con su correspondiente clase esta declarado eso c:-->
        <!--OJO: SE REQUIERE INTERNET PARA CARGAR LOS ICONOS DE CADA APARTADO-->
        <a class="barra-nav__link " href="otherindex.php"><img class="alinearImg" alt="Tienda" src="img/shopping-bag.png"/> Tienda</a>
        <a class="barra-nav__link barra-nav__link--active" href="soporte.php"><img class="alinearImg" alt="Support" src="img/Support-selected.png"/> Soporte</a>
        <?php
        @$verificar = $_SESSION['verify'];
        if($verificar == "true"){
        ?>
            <a class="barra-nav__link " href="cart.php"><img class="alinearImg" src="img/shopping-cart.png" alt="carrito"> Carrito</a>
            <a class="barra-nav__link " href="logout.php"><img class="alinearImg" src="img/enter.png" alt="logout"> Log out</a>
        <?php
        } else { ?>
            <a class="barra-nav__link " href="register.php"><img class="alinearImg" src="img/add-user.png" alt="signup"> Sign up</a>
            <a class="barra-nav__link " href="login.php"><img class="alinearImg" src="img/login.png" alt="login"> Login</a>
        <?php
        }
        ?>
    </nav>

    <main class="contenido">
        <h1><b>Contactanos</b></h1>

        <div class="soporte">
            <div class="soporte__contenido">
                <p>Somos una pequeña sucursal que esta dispuesta a vender ropa de la mejor calidad,
                    ofrecemos y garantizamos que nuestros productos esta hechos para ser duraderos,
                    por el momento el catalogo que tenemos es pequeño, pero conforme llegue
                    mas stock iremos agregando mas productos, de mientras disfrute del contenido
                    que tenemos
                </p>    
                <p>
                    Puedes contactarnos enviando un correo a: <br>
                    somos.caballeros@gmail.com <br>
                    o tambien llamando al numero: 8717672747 <br>
                    cualquier duda nosotros te la resolveremos de inmediato
                </p>
            </div>
            <img class="soporte__img" src="img/AboutUs.png" alt="friendlyGhost">
        </div>
    </main>

    <footer class="footer">
        <p class="footer__text">
            <script>
                    var rand
                    rand = Math.round(Math.random()*50000)
                    document.write("Visitas esta semana: "+rand)
            </script>
        </p>
        <p class="footer__text"><img src="img/GhostIcon.png" alt="boo" class="alinearImg"> Todos los derechos reservados 2022 <img src="img/GhostIcon.png" alt="boo" class="alinearImg"></p>
    </footer>
    
</body>

</html>

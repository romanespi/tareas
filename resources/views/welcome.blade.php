<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Responsive</title>
    <script src="https://kit.fontawesome.com/1ffa009b6c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        <h2 class="logo">Román Espino</h2>
        <input type="checkbox" id="check">
        <label for="check" class="mostrar-menu">&#8801</label>
        <nav class="menu">
            <a href="#">Inicio</a>
            <a href="#">Sobre Nosotros</a>
            <a href="#">Blog</a>
            <label for="check" class="esconder-menu">&#215</label>
        </nav>
    </header>
    <section id="banner">
        <div class="contenido-banner">
            <h3><span>ROMÁN ESPINO: </span>DISEÑO WEB RESPONSIVE <br> MOBILE FRIENDLY</h3>
            <a href=" {{ route('tareas.index') }} " class="boton-empezar">EMPEZAR</a>
        </div>
    </section>
    <section id="personas">
        <div>
            <img src="../storage/roman.jpg" alt="">
            <h4>Lorem ipsum dolor sit amet</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet, voluptas.</p>
            <a href="#" class="boton-saber-mas">Saber Más</a>
        </div>
        <div>
            <img src="../storage/zara.jpg" alt="">
            <h4>Lorem ipsum dolor sit amet</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet, voluptas.</p>
            <a href="#" class="boton-saber-mas">Saber Más</a>
        </div>
    </section>
    <section id="iconos">
        <div class="contenido-iconos">
            <div>
                <i class="fas fa-shipping-fast fa-3x"></i>
                <h6>Rápido</h6>
                <p>Lorem ipsum dolor sit amet consectetur</p>
            </div>
            <div>
                <i class="fab fa-accessible-icon fa-3x"></i>
                <h6>Accesible</h6>
                <p>Lorem ipsum dolor sit amet consectetur</p>
            </div>
            <div id="icono-mobile">
                <i class="fas fa-mobile-alt fa-3x"></i>
                <h6>Responsive</h6>
                <p>Lorem ipsum dolor sit amet consectetur</p>
            </div>
        </div>
        <div class="boton-iconos">
            <a href="#" class="boton-saber-mas">Saber Más</a>
        </div>
    </section>
    <section id="contacto">
        <h4>Contacta con nosotros</h4>
        <form action="">
            <div class="datos-form">
                <div class="nombre">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre">
                </div>
                <div class="email">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email">
                </div>
            </div>
            <div class="mensaje">
                <label for="mensaje">Mensaje</label>
                <textarea name="mensaje" id="mensaje" cols="30" rows="10" placeholder="Mensaje"></textarea>
            </div>
            <div class="boton-formulario">
                <a href="#" class="boton-saber-mas">Enviar Mensaje</a>
            </div>
        </form>
    </section>

    <footer>
        <p>&copy;2019 Román Espino</p>
    </footer>
</body>
</html>
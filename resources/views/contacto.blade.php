<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pensión Ahora &#128116;</title>
    <link rel="shortcut icon" href="img/logo pension favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/estiloscontacto.css">
    <link rel="stylesheet" href="css/font.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9XW2W869L8"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-9XW2W869L8');
    </script>
</head>
<body>
    <header id="top">

        <nav>
            <section class="contenedor1 nav">
                <div class="logo">
                    <a href="index.html"><img src="img/logo pension ahora.png" alt=""></a>
                </div>
                <div class="enlaces-header">
                    <a href="{{Route('index')}}">Inicio</a>
                    <a href="{{Route('nosotros')}}">Nosotros</a>               
                    <a href="{{Route('servicios')}}">Servicios</a>
                    <a href="https://pensionahora.com/blog/">Blog</a>
                    <a href="{{Route('contacto')}}">Contacto</a>
                </div>
                <div class="hamburguer">
                    <i class="fas fa-bars"></i>
                </div>
            </section>
        </nav>

        <section class="textos-header" data-aos="zoom-in-down">
            
            <h1>El comienzo de tu futuro</h1>
            <a href="#formulario">Contáctanos</a>
            <h2>"Trabajamos por los que trabajaron por nosotros"</h2> 
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
    </header>
    <main>
        <div class="social-bar">
            <a href="https://www.m.facebook.com/pensionahora" class="icon icon-facebook" target="_blank"><i class="fab fa-facebook-square"></i> </a>
            <a href="https://wa.me/c/5215569088082" class="icon icon-whatsapp" target="_blank"><i class="fab fa-whatsapp"></i></a>
            <a href="https://www.instagram.com/pensionahora/" class="icon icon-instagram" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.youtube.com/channel/UCsLHD-6UxiOrQEFdiVC5pDg" class="icon icon-youtube" target="_blank"><i class="fab fa-youtube-square"></i></a>

        </div>

        <div class="contenedor">
            <section class="contenido-formulario">
                <section class="textos-formulario" id="formulario">
                    <h1>Contáctanos</h1>
                    <p><span>¡Estas a un paso de iniciar tu futuro! </span><br>Agenda una cita y recibe asesoría gratuita y personalizada</p>
                    <a href="https://www.facebook.com/pensionahora" target="_blank"><i class="fab fa-facebook-square"></i></a>
                    <a href="https://web.whatsapp.com/" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    <a href="https://www.youtube.com/channel/UCsLHD-6UxiOrQEFdiVC5pDg" target="_blank"><i class="fab fa-youtube-square"></i></a>
                </section>
                <section class="formulario">
                    <form action="mailto:contacto@pensionahora.com" metod="Post">
                        <div class="form">
                            
                            <div class="grupo">
                                <input type="text" name="" id="" required><span class="barra"></span>
                                <label>Nombre</label>
                            </div>
                            <div class="grupo">
                                <input type="email" name="" id="" required><span class="barra"></span>
                                <label>Email</label>
                            </div>
                            <div class="grupo">
                                <input type="number" name="" id="" required><span class="barra"></span>
                                <label>Teléfono</label>
                            </div>
                            <div class="grupo">
                                <textarea name="" id=""rows="3" required></textarea><span class="barra"></span>
                                <label>Mensaje</label>
                            </div>
                            <button type="submit">Contactar</button>
                        </div>
                    </form>
                </section>
            </section>
        </div>


    </main>
    <footer>
        <div id="bottom" class="contenedor-footer">
            <div class="content-foo">
                <h4>Teléfono &#128222;</h4>
                <a href="tel:+525569088082"><p>55 6908 8082</p></a>

            </div>
            <div class="content-foo">
                <h4>Email &#128231;</a></h4>
                <a href="mailto:contacto@pensionahora.com"><p>contacto@pensionahora.com</p> </a>
                
            </div>
        </div>
        <h2 class="titulo-final">&copy; Pensión Ahora | México</h2>
    </footer>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/c29c932333.js" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>

    </body>
</html>
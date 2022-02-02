<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pensión Ahora &#128116;</title>
    <link rel="shortcut icon" href="img/logo pension favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/estilos.css">
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
                    <a href="{{Route('index')}}"><img src="img/logo pension ahora.png" alt=""></a>
                </div>
                <div class="enlaces-header">
                        <a href="#top">Inicio</a>
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
            
            <h1>"Trabajamos por los que trabajaron por nosotros"</h1>
            <h2>Calcula tu pensión <a href="{{Route('contacto')}}">aquí</a></h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
    </header>
    <main>
        
        <div class="social-bar">
            <a href="https://www.facebook.com/pensionahora" class="icon icon-facebook" target="_blank"><i class="fab fa-facebook-square"></i> </a>
            <a href="https://wa.me/c/5215569088082" class="icon icon-whatsapp" target="_blank"><i class="fab fa-whatsapp"></i></a>
            <a href="https://www.instagram.com/pensionahora/" class="icon icon-instagram" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.youtube.com/channel/UCsLHD-6UxiOrQEFdiVC5pDg" class="icon icon-youtube" target="_blank"><i class="fab fa-youtube-square"></i></a>

        </div>



        <section id="nosotros" class="contededor sobre-nosotros">
            <div class="contenedor-sobre-nosotros">
                <img src="img/IMGP0399 (1).jpg" alt="" class="imagen-nosotros">
                <div class="contenido-textos" data-aos="zoom-in-up">
                    <h3>¿Quienes somos?</h3>
                    <p><span>Pensión Ahora</span> la conformamos un grupo de expertos que trabaja de manera interdisciplinaria con el objetivo de otorgar servicios 
                        profesionales de asesoría y tramitación de pensiones ante el Instituto Mexicano del Seguro Social. Nos valemos de las mismas 
                        normativas que establece el instituto y con esto logramos el mejor panorama para cada uno de nuestros clientes.<br>
                        <span>¡Acércate y obtén asesoría gratuita y personalizada!</span>
                    </p>
                </div>
            </div>
        </section>
        <section id="portafolio" class="portafolio">
            <div class="contenedor">
                <h2 class="titulo">Conoce los servicios que manejamos:</h2>
                    <div class="slider-contenedor">
                        <div class="slider-serv">
                            <h2>Asesoria Gratuita</h2>
                            <a href="{{Route('servicios')}}"><img src="img/icono1.png" alt=""></a>
                        </div>
                        <div class="slider-serv">
                            <h2>Estudios y proyección de pensión</h2>
                            <a href="{{Route('servicios')}}"><img src="img/icono2.png" alt=""></a>
                        </div>
                        <div class="slider-serv">
                            <h2>Correción de datos</h2>
                            <a href="{{Route('servicios')}}"><img src="img/icono3.png" alt=""></a>
                        </div>
                        <div class="slider-serv">
                            <h2>Semanas no reconocidas</h2>
                            <a href="{{Route('servicios')}}"><img src="img/icono4.png" alt=""></a>
                        </div>
                        <div class="slider-serv">
                            <h2>Continuación voluntaria al régimen obligatorio</h2>
                            <a href="{{Route('servicios')}}"><img src="img/icono5.png" alt=""></a>
                        </div>
                        <div class="slider-serv">
                            <h2>Afiliación</h2>
                            <a href="{{Route('servicios')}}"><img src="img/icono6.png" alt=""></a>
                        </div>
                        <div class="slider-serv">
                            <h2>Tramites de pensión</h2>
                            <a href="{{Route('servicios')}}"><img src="img/icono7.png" alt=""></a>
                        </div>
                        <div class="slider-serv">
                            <h2>AFORE</h2>
                            <a href="{{Route('servicios')}}"><img src="img/icono8.png" alt=""></a>
                        </div>
                        <div class="slider-serv">
                            <h2>Legal y defensoria</h2>
                            <a href="{{Route('servicios')}}"><img src="img/icono9.png" alt=""></a>
                        </div>
                        <div class="slider-serv">
                            <h2>Asesoria Gratuita</h2>
                            <a href="{{Route('servicios')}}"><img src="img/icono1.png" alt=""></a>
                        </div>
                    </div> 
            </div>
        </section>
        <section id="servicios" class="clientes contenedor">
            <h2 class="titulo">¿Qué dicen nuestros clientes?</h2>
            <div class="cards">
                <div class="card" data-aos="zoom-in-left">
                    <img src="img/pizarron.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Liliana Espinoza</h4>
                       <p>"Todos los colaboradores son muy profesionales. Muestran gusto por la atención, son cordiales y muy comprometidos. Tienen comunicación continua y atenta con los pensionados. ¡Excelente servicio!"</p> 
                    </div>
                </div>
                <div class="card" data-aos="zoom-in-right">
                    <img src="img/screen.png" alt="">
                    <div class="contenido-texto-card">
                        <h4>Antonio Romero</h4>
                       <p>"Nos dieron atención personalizada, atenta y exacta. Nos explicaron detalladamente las modalidades de pensión y nos mantienen informados en relación a cuánto es el monto real que debemos de recibir."</p> 
                    </div>
                </div>
            </div>
        </section>
        <section class="about-services">
            <div class="contenedor">
                <h2 class="titulo">Nuestras fortalezas nos avalan</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind" data-aos="fade-up"
                    data-aos-duration="3000">
                        <img src="img/recorte 3.jpg" alt="">
                        <h3>Asesoría Gratuita</h3>
                        <p>Sabemos que el camino muchas veces es incierto y hasta cierto punto difícil. <br><span>¡Permítenos apoyarte en ese proceso!</span></p>

                    </div>
                    <div class="servicio-ind" data-aos="fade-up"
                    data-aos-duration="3000">
                        <img src="img/recorte 2.jpg" alt="">
                        <h3>Trámites personalizados</h3>
                        <p>Ninguna persona es igual a ti, por ello todos nuestros <span>trámites</span> de pensión son totalmente pensados para <span>tu situación.</span></p>
                        
                    </div>
                    <div class="servicio-ind" data-aos="fade-up"
                    data-aos-duration="3000">
                        <img src="img/recorte 1.jpg" alt="">
                        <h3>Resultados garantizados</h3>
                        <p>No importa cuál sea tu situación <span>¡Siempre tendremos una solución para ti!</span></p>
                        
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div id="bottom" class="contenedor-footer">
            
            <div class="content-foo">
                <h4>Teléfono &#128222;</h4>
                <a href="tel:+525569075257"><p>55 6907 5257 / 55 6908 8082</p></a>

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
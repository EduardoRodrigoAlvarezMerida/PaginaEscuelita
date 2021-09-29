<?php
include("db.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Escuelita</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/e9452e0f64.js" crossorigin="anonymous"></script>

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="51">
        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-light navbar-light">
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand">Escuela</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="#home" class="nav-item nav-link active">Inicio</a>
                        <a href="#about" class="nav-item nav-link">Acerca de</a>
                        <a href="#service" class="nav-item nav-link">Servicios</a>
                        <a href="#experience" class="nav-item nav-link">Experiencia</a>
                        <a href="#portfolio" class="nav-item nav-link">Carreras</a>
                        <a href="#price" class="nav-item nav-link">Cursos</a>
                        <a href="#review" class="nav-item nav-link">Mision y Vision</a>
                        <a href="#team" class="nav-item nav-link">Team</a>
                        <a href="#blog" class="nav-item nav-link">Blog</a>
                        <a href="#contact" class="nav-item nav-link">Contacto</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->


        <!-- Hero Start -->
        <div class="hero" id="home">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-6">
                        <div class="hero-content">
                            <div class="hero-text">
                                <p>Escuela</p>
                                <h1>Publica</h1>
                                <h2></h2>
                                <div class="typed-text">LA mejor educacion hasta el hogar...</div>
                            </div>
                            <div class="hero-btn">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 d-none d-md-block">
                        <div class="hero-image">
                            <img src="img/1.jpg" width="9500px" alt="Hero Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- About Start -->
        <div class="about wow fadeInUp" data-wow-delay="0.1s" id="about">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="img/about.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-header text-left">
                                <p>Conoce sobre nosotros:</p>
                                <h2>20 Años de experiencia</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                    Somos un centro de educacion altamente capacitado para poder formar a los niños.
                                </p>
                            </div>
                            <div class="skills">
                                <div class="skill-name">
                                    <p>Promedio en Matematicas</p><p>85%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="skill-name">
                                    <p>Promedio en Fisica</p><p>95%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="skill-name">
                                    <p>Promedio en Ingles</p><p>90%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="skill-name">
                                    <p>Promedio en Computacion</p><p>85%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <a class="btn" href="">Volver al Inicio</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        
        
        <!-- Service Start -->
        <div class="service" id="service">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>Servicios:</p>
                    <h2>Ofrecemos los siguientes servivios:</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fa fa-laptop"></i>
                            </div>
                            <div class="service-text">
                                <h3>Educacion Virtual</h3>
                                <p>
                                    Tenemos la capacidad de impartir clases a los alumnos desde casa.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fa fa-laptop-code"></i>
                            </div>
                            <div class="service-text">
                                <h3>Programacion</h3>
                                <p>
                                    Los alumnos pueden recibir clases sobre programacion, sin ningun costo adicional.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fab fa-android"></i>
                            </div>
                            <div class="service-text">
                                <h3>Apps Android</h3>
                                <p>
                                    Tenemos una plataforma disponible para que los alumnos puedan interactuar con sus compañeros y maestros.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fab fa-apple"></i>
                            </div>
                            <div class="service-text">
                                <h3>Apps I"os</h3>
                                <p>
                                    Tenemos una plataforma disponible para que los alumnos puedan interactuar con sus compañeros y maestros.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
        
        
         <!-- Experience Start -->
        <div class="experience" id="experience">
            <div class="container">
                <header class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>Nuestra Experiencia:</p>
                    <h2>Experiencia Trabajando:</h2>
                </header>
                <div class="timeline">
                    <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">2000- 2005</div>
                            <h2>Inauguración</h2>
                            <h4>Quetzaltenango</h4>
                            <p>
                                Empezamos a trabajar y a impartir clases solo para alumnos de primero a sexto primaria.
                            </p>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">2006 - 2010</div>
                            <h2>Avances</h2>
                            <h4>Quetzaltenango</h4>
                            <p>
                                Decidimos incorporar primero , segundo y tercero basico a nuestras instalaciones. 
                            </p>
                        </div>
                    </div>
                    <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">2011 - 2021</div>
                            <h2>Expancion</h2>
                            <h4>Quetzaltenango</h4>
                            <p>
                                Decidimos poner 4to y 5to bachillerato , implementando nuevas carreas , como: Computacion, Medicina, Juridicas.
                            </p>
                        </div>
                    </div>
                  
        <!-- Job Experience End -->
        
        
        <!-- Banner Start -->
      
        <!-- Banner End -->


        <!-- Portfolio Start -->
        <div class="portfolio" id="portfolio">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>Carreras:</p>
                    <h2>Carreras disponibles:</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul id="portfolio-filter">
                            
                        </ul>
                    </div>
                </div>
                <div class="row portfolio-container">
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-1 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="portfolio-wrap">
                            <div class="portfolio-img">
                                <img src="img/portfolio-1.jpg" alt="Image">
                            </div>
                            <div class="portfolio-text">
                                <h3>Computacion</h3>
                                <a class="btn" href="img/portfolio-1.jpg" data-lightbox="portfolio">+</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-2 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <div class="portfolio-img">
                                <img src="img/3.jpg" alt="Image">
                            </div>
                            <div class="portfolio-text">
                                <h3>Electronica</h3>
                                <a class="btn" href="img/3.jpg" data-lightbox="portfolio">+</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="portfolio-wrap">
                            <div class="portfolio-img">
                                <img src="img/2.png" width="5000px" height="4500px" alt="Image">
                            </div>
                            <div class="portfolio-text">
                                <h3>Medicina</h3>
                                <a class="btn" href="img/2.png" data-lightbox="portfolio">+</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-1 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="portfolio-wrap">
                            <div class="portfolio-img">
                                <img src="img/4.jpg" alt="Image">
                            </div>
                            <div class="portfolio-text">
                                <h3>Diseño Grafico</h3>
                                <a class="btn" href="img/4.jpg" data-lightbox="portfolio">+</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-2 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="portfolio-wrap">
                            <div class="portfolio-img">
                                <img src="img/5.jpg" alt="Image">
                            </div>
                            <div class="portfolio-text">
                                <h3>Ciencias y Letras</h3>
                                <a class="btn" href="img/5.jpg" data-lightbox="portfolio">+</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-3 wow fadeInUp" data-wow-delay="1s">
                        <div class="portfolio-wrap">
                            <div class="portfolio-img">
                                <img src="img/6.jpg" alt="Image">
                            </div>
                            <div class="portfolio-text">
                                <h3>Perito Contador</h3>
                                <a class="btn" href="img/6.jpg" data-lightbox="portfolio">+</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio End -->
        
        
        <!-- Banner Start -->
        <div class="banner wow zoomIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="section-header text-center">
                    <p>¡DESCUENTO!</p>
                    <h2>Aprovecha el <span>30%</span> de descuento:</h2>
                </div>
                <div class="container banner-text">
                    <p>
                       Este descuento aplica para todas las anteriores carreras y para el nivel basico. Aplica para el ciclo escolar 2022.
                    </p>
                    
                </div>
            </div>
        </div>
        <!-- Banner End -->
        
        
        <!-- Price Start -->
        <div class="price" id="price">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>Grados</p>
                    <h2>Precios y cursos</h2>
                </div>
               <div class="col-md-4 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="price-item featured-item">
                            <div class="price-header">
                                <div class="price-title">
                                    <h2>Preprimaria</h2>
                                </div>
                                <div class="price-prices">
                                    <h2><small>Q.</small>350.00<span>/Mes</span></h2>
                                </div>
                            </div>
                            <div class="price-body">
                                <div class="price-description">
                                    <ul>
                                        <li>Cursos:</li>
                                        <li>Destrezas de aprendizaje</li>
                                        <li>Comunicación y Lenguaje</li>
                                        <li>Medio Social y Natural</li>
                                        <li>Expresión Artística</li>
                                        <li>Educación Física</li>
                                        <li>Artes Plasticas</li>
                                        <li>Contabilidad</li>
                                        <li>Computacion</li>
                                        <li>Fisica Fundamental</li>
                                        <li>Estetica</li>

                                    </ul>
                                </div>
                            </div>
                            <div class="price-footer">
                                <div class="price-action">
                                    <a class="btn" href="">Adquirir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="price-item">
                            <div class="price-header">
                                <div class="price-title">
                                    <h2>Primaria</h2>
                                </div>
                                <div class="price-prices">
                                    <h2><small>Q.</small>500.00<span>/Mes</span></h2>
                                </div>
                            </div>
                            <div class="price-body">
                                <div class="price-description">
                                    <ul>
                                        <li>Cursos:</li>
                                        <li>Matematicas</li>
                                        <li>Lenguaje</li>
                                        <li>Ciencias Sociales</li>
                                        <li>Ciencias Naturales</li>
                                        <li>Ingles</li>
                                        <li>Artes Plasticas</li>
                                        <li>Fisica</li>
                                        <li>Lectura</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="price-footer">
                                <div class="price-action">
                                    <a class="btn" href="">Adquirir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="price-item featured-item">
                            <div class="price-header">
                                <div class="price-title">
                                    <h2>Basico</h2>
                                </div>
                                <div class="price-prices">
                                    <h2><small>Q.</small>750.00<span>/Mes</span></h2>
                                </div>
                            </div>
                            <div class="price-body">
                                <div class="price-description">
                                    <ul>
                                        <li>Cursos:</li>
                                        <li>Matematicas</li>
                                        <li>Lenguaje</li>
                                        <li>Ciencias Sociales</li>
                                        <li>Ciencias Naturales</li>
                                        <li>Ingles</li>
                                        <li>Artes Plasticas</li>
                                        <li>Contabilidad</li>
                                        <li>Computacion</li>
                                        <li>Fisica Fundamental</li>
                                        <li>Estetica</li>

                                    </ul>
                                </div>
                            </div>
                            <div class="price-footer">
                                <div class="price-action">
                                    <a class="btn" href="">Adquirir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="price-item">
                            <div class="price-header">
                                <div class="price-title">
                                    <h2>Bachillerato</h2>
                                </div>
                                <div class="price-prices">
                                    <h2><small>Q</small>1150.00<span>/Mes</span></h2>
                                </div>
                            </div>
                            <div class="price-body">
                                <div class="price-description">
                                    <ul>
                                        <li>Cursos:</li>
                                        <li>Matematicas</li>
                                        <li>Ingles</li>
                                        <li>Computacion</li>
                                        <li>Fisica Fundamental</li>
                                        <li>Estetica</li>
                                        <li>Etica</li>
                                        <li>Biologia</li>
                                        <li>Quimica</li>

                                    </ul>
                                </div>
                            </div>
                            <div class="price-footer">
                                <div class="price-action">
                                    <a class="btn" href="">Adquirir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Price End -->
        
        
        <!-- Testimonial Start -->
        <div class="testimonial wow fadeInUp" data-wow-delay="0.1s" id="review">
            <div class="container">
                <div class="testimonial-icon">
                    <i class="fa fa-quote-left"></i>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-1.jpg" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p>
                                Educar y formar integralmente con la finalidad que los estudiantes alcancen su autorrealización humana y profesional a través de un proyecto educativo innovador que desarrolle competencias, pensamiento crítico y analítico, aptitudes, habilidades y destrezas.
                            </p>
                            <h3>Mision</h3>
                            <h4></h4>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-2.jpg" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p>
                                Consolidar nuestra posición en Guatemala como una institución educativa de excelente calidad, cuyos egresados manifiesten dominio de los idiomas español e inglés, altos valores, éticos y espirituales y una  sólida formación académica y tecnológica que les permitirá incorporarse con éxito al campo laboral y a los estudios superiores.


                            </p>
                            <h3>Vision</h3>
                            <h4></h4>
                        </div>
                    </div>
                    <div class="owl-carousel testimonials-carousel">
                        <div class="testimonial-item">
                            <div class="testimonial-img">
                                <img src="img/testimonial-1.jpg" alt="Image">
                            </div>
                            <div class="testimonial-text">
                                <p>
                                    De acuerdo con el tercer eje de los ejes y sus componentes en el Currículum Nacional Base, “el propósito de la educación en valores es afirmar y difundir los valores personales, sociales y cívicos, éticos, espirituales, culturales y ecológicos”.

Con ello se pretende centrar las bases para el desarrollo de pensamiento, actitudes y comportamientos orientados a una convivencia armónica en el marco de la diversidad sociocultural, los Derechos Humanos, la Cultura de Paz y el desarrollo sostenible. (Currículum Nacional Base, Nivel Medio, Ciclo Básico, área de Ciencias Sociales y Formación Ciudadana página 35).

Dentro de este gran conjunto de valores que se derivan de las categorías arriba señaladas.  El Centro Educativo ha seleccionado y reforzará un conjunto de valores a lo largo de todo su quehacer educativo.
                                </p>
                                <h3>Valores</h3>
                                <h4></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

         <!-- Contact Start -->
         <div class="contact wow fadeInUp" data-wow-delay="0.1s" id="contact">
        <div class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="contact-form">
                            <h2><center>Maestros</center></h2>
                        <form class="main_form" method="POST" action="guardar_maestro.php">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <input class="form-control" placeholder="Nombre" type="text" name="nombre">
                                </div>
                                <div class=" col-md-12">
                                    <input class="form-control" placeholder="Apellido" type="text" name="apellido">
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <input class="form-control" placeholder="Gmail" type="text" name="email">
                                </div>
                                <div class=" col-md-12">
                                    <input class="form-control" placeholder="Telefono" type="text" name="telefono">
                                </div>
                                <div class="col-md-12">
                                    <textarea class="textarea" placeholder="Mensaje" type="text" name="descripcion" > </textarea>
                                </div>
                                <div class=" col-md-12">
                                 <!--<input type="sumbit" value="Enviar"/> -->  
                                    <button class="send">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>

        <div class="row">
        <div class="col-md-12">
        <table class="table table-striped">
            <thead>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Descripcion</th>
                <th>Acciones</th>
</thead>
<tbody>
<?php
$consulta = "SELECT * FROM maestro";
$resultado = mysqli_query($conexion,$consulta);

while($fila = mysqli_fetch_array($resultado)) 
{ 
?>
<tr>
    <td> <?php echo $fila["nombre"]; ?> </td>
    <td> <?php echo $fila["apellido"]; ?> </td>
    <td> <?php echo $fila["email"]; ?> </td>
    <td> <?php echo $fila["telefono"]; ?> </td>
    <td> <?php echo $fila["descripcion"]; ?> </td>
    <td>
<a href="eliminar_maestro.php?id=<?php echo $fila["id"]; ?>"
 <i class="fas fa-eraser"></i>
</a>
</td>

</tr>   
<?php
 }
  ?>
</thbody>
</table>

                    </div>
                </div>
</div>
        <!-- Contact End -->

        <!-- Team Start -->
        <div class="team" id="team">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>Nuestro Equipo:</p>
                    <h2>Maestros:</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-1.jpg" alt="Image">
                            </div>
                            <div class="team-text">
                                <h2>Claudia Naranjo</h2>
                                <h4>Maestra de Ingles</h4>
                                <p>
                                   Altamente capacitada para poder impartir clases de ingles a cualquier grado academico.
                                </p>
                                <div class="team-social">
                                    <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-2.jpg" alt="Image">
                            </div>
                            <div class="team-text">
                                <h2>Dylan Perez</h2>
                                <h4>Maestro de Programacion</h4>
                                <p>
                                    El es un experto en la Programacion, por lo cual es un buen mentor para los alumnos.
                                </p>
                                <div class="team-social">
                                    <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-3.jpg" alt="Image">
                            </div>
                            <div class="team-text">
                                <h2>Jennifer Torres</h2>
                                <h4>Maestra de Basico</h4>
                                <p>
                                    Esta maestra esta muy bien capacitada para poder dar clases a los niños de los grados de tod basico.
                                </p>
                                <div class="team-social">
                                    <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-4.jpg" alt="Image">
                            </div>
                            <div class="team-text">
                                <h2>Miguel Fernandes</h2>
                                <h4>Maestro de Primaria</h4>
                                <p>
                                   El es un docente muy derecho, tiene una muy buena habilidad para poder enseñar a los niños de primaria.
                                </p>
                                <div class="team-social">
                                    <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
        
        
        <!-- Contact Start -->
        <div class="contact wow fadeInUp" data-wow-delay="0.1s" id="contact">
        <div class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="contact-form">
                            <h2><center>Contacto:</center></h2>
                        <form class="main_form" method="POST" action="contact.php">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <input class="form-control" placeholder="Nombre" type="text" name="name">
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <input class="form-control" placeholder="Gmail" type="text" name="correo">
                                </div>
                                <div class=" col-md-12">
                                    <input class="form-control" placeholder="telefono" type="text" name="telefono">
                                </div>
                                <div class="col-md-12">
                                    <textarea class="textarea" placeholder="Mensaje" type="text" name="mensaje" > </textarea>
                                </div>
                                <div class=" col-md-12">
                                 <!--<input type="sumbit" value="Enviar"/> -->  
                                    <button class="send">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        <!-- Contact End -->


        <!-- Blog Start -->
        <div class="blog" id="blog">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>BLOG:</p>
                    <h2>Nuestro Blog</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="blog-item wow fadeInUp" data-wow-delay="0.1s">
                            <div class="blog-img">
                                <img src="img/blog-1.jpg" alt="Blog">
                            </div>
                            <div class="blog-text">
                                <h2>La educacion desde casa</h2>
                                <div class="blog-meta">
                                    <p><i class="far fa-user"></i>Alumnos</p>
                                    <p><i class="far fa-list-alt"></i>Clases</p>
                                    <p><i class="far fa-calendar-alt"></i>08/08/2021</p>
                                    <p><i class="far fa-comments"></i>5</p>
                                </div>
                                <p>
                                   Con la nueva plataforma del colegio, los alumnos han podido interactuar mucho mas con sus compañeros y maestros, lo que es un avance en su desarrollo.
                                </p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="blog-item wow fadeInUp" data-wow-delay="0.3s">
                            <div class="blog-img">
                                <img src="img/blog-2.jpg" alt="Blog">
                            </div>
                            <div class="blog-text">
                                <h2>Notas de 3 Unidad</h2>
                                <div class="blog-meta">
                                    <p><i class="far fa-user"></i>Maestros</p>
                                    <p><i class="far fa-list-alt"></i>Notas</p>
                                    <p><i class="far fa-calendar-alt"></i>02/08/2021</p>
                                    <p><i class="far fa-comments"></i>10</p>
                                </div>
                                <p>
                                   Las notas ya han sido publicadas en nuestra plataforma, si tienes solvencia puedes acceder a tus notas, de lo contrario tienes que estar solvente.
                                </p>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->


        <!-- Footer Start -->
        <div class="footer wow fadeIn" data-wow-delay="0.3s">
            <div class="container-fluid">
                <div class="container">
                    <div class="footer-info">
                        <h2>Escuela Publica</h2>
                        <h3>12 Avenida Zona 7 , Quetzaltenango</h3>
                        <div class="footer-menu">
                            <p>+502 5489-9655</p>
                            <p>escuelitapublica@gmail.com.edu.gt</p>
                        </div>
                        <div class="footer-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="container copyright">
                    <p>&copy; <a href="#">Escuela</a>Publica| Editada por <a href="https://htmlcodex.com">Eduardo Alvarez</a></p>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        
        <!-- Back to top button -->
        <a href="#" class="btn back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/typed/typed.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>

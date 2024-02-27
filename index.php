<?php
    include 'header.php';
?>

    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100 imagenpequeña" src="img/jairo_carrusel.jpeg" alt="Image" style="height: 710px;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">DISEÑA</h4>
                            <h1 class="display-3 text-white mb-md-4">Diseñamos El Sitio Web De Tus Sueños</h1>
                            <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100 imagenpequeña" src="img/carrusel_compu.jpg" style="height: 710px;" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">¿Necesitas Un Sitio WEb?</h4>
                            <h1 class="display-3 text-white mb-md-4">Crea Sorprendentes Sitios Web Con Nosotros</h1>
                            <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/manoModelo.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Sobre Nosotros</h6>
                        <h1 class="mb-3">Somos Tu Socio Confiable Para Tu Sitio Web</h1>
                        <p id="texto-corto">En WebOSLive (Web Online Services Live), 
                            nos especializamos en ofrecer los mejores servicios de 
                            implementación de sitios web y soporte, todo dentro de 
                            tu presupuesto. </p>
                        <p id="texto-largo" style="display: none;">Desde la creación inicial hasta el 
                            mantenimiento continuo, nuestro equipo experto está 
                            aquí para asegurar que tu presencia en línea sea impecable. 
                            Con una combinación 
                            de tecnologías líderes como HTML, CSS y JavaScript, y un 
                            enfoque centrado en el usuario, te garantizamos un sitio 
                            web que no solo se vea increíble, sino que también funcione 
                            sin problemas. Ya sea que estés buscando lanzar un nuevo sitio 
                            web o mejorar uno existente, ¡estamos aquí para ayudarte en cada paso del camino!</p>
                        <button id="mostrar-mas" class="btn btn-primary mt-1 mb-3">Leer más</button>
                        <button id="mostrar-menos" class="btn btn-primary mt-1 mb-3" style="display: none;">Leer menos</button>
                        <div class="row mb-4">
                            <div class="col-6">
                                <img class="img-fluid" src="img/fotoGrupal.jpeg" alt="" style="height: 160px; ">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid" src="img/fondo2.jpg" alt="" style="height: 160px; ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Feature Start -->
    <div class="container-fluid pb-5">
        <div class="container pb-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-money-check-alt text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Precios Competitivos</h5>
                            <p class="m-0">Ofrecemos tarifas competitivas para tu sitio web.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-award text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Mejores Servicios</h5>
                            <p class="m-0">Garantizamos calidad en cada etapa de tu sitio web.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-globe text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Cobertura Mundial</h5>
                            <p class="m-0">Llevamos tu sitio web a cualquier parte del mundo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

    <!-- Service Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Servicios</h6>
                <h1>Diseño Y Desarrollo Web</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x bx bxl-java mx-auto mb-4" style="font-size: 65px;"></i>
                        <h5 class="mb-2">Diseño y Desarrollo de Sitios Web</h5>
                        <p class="m-0">Incluye la creación de un diseño 
                            funcional para el sitio web, así como el desarrollo de 
                            las funcionalidades necesarias. Puede implicar el 
                            uso de tecnologías web como HTML, CSS, JavaScript y 
                            frameworks como React. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x bx bx-search-alt-2 mx-auto mb-4" style="font-size: 45px;"></i>
                        <h5 class="mb-2">Optimización de SEO (Optimización de Motores de Búsqueda)</h5>
                        <p class="m-0">Implementación de técnicas y mejores prácticas de SEO 
                            para mejorar la visibilidad del sitio web en los motores de 
                            búsqueda y aumentar el tráfico orgánico. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x bx bxs-band-aid mx-auto mb-4" style="font-size: 45px;"></i>
                        <h5 class="mb-2">Capacitación y Soporte</h5>
                        <p class="m-0">Proporcionar capacitación a los clientes sobre cómo 
                            utilizar y administrar su nuevo sitio web, así 
                            como ofrecer soporte técnico continuo para 
                            resolver cualquier problema o pregunta que puedan tener. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Team Start -->
    <div id="TeamStart" class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">¿Quienes Somos?</h6>
                <h1>Equipo De Trabajo</h1>
            </div>
            <div class="row justify-content-center" >
                <div class="col-lg-4 col-md-5 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/fredyBenson.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-primary btn-square" href="trofeo.php?red=Facebook"> <i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="trofeo.php?red=Twitter"><i class="fa-brands fa-x-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="trofeo.php?red=Linkedin"> <i class="fab fa-linkedin-in"></i> </a>
                                <a class="btn btn-outline-primary btn-square" href="trofeo.php?red=Instagram"><i class="fab fa-instagram"></i> </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate">Fundador</h5>
                            <p class="m-0">Freddy Benson</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/luisangel.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-primary btn-square" href="trofeo.php?red=Facebook"> <i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="trofeo.php?red=Twitter"><i class="fa-brands fa-x-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="trofeo.php?red=Linkedin"> <i class="fab fa-linkedin-in"></i> </a>
                                <a class="btn btn-outline-primary btn-square" href="trofeo.php?red=Instagram"><i class="fab fa-instagram"></i> </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate" style="font-size: 17px;">Luis Ángel Jorge Jimenez</h5>
                            <p class="m-0"><b> Desarrollador Frontend:</b> Con una visión 
                            estratégica y una comprensión profunda de las necesidades del 
                            negocio, Luis Ángel lidera el equipo 
                            como <b>Product Owner</b>. Define la visión del producto, 
                            establece las prioridades del backlog y trabaja en 
                            estrecha colaboración con los interesados para 
                            garantizar que el producto cumpla con sus expectativas y objetivos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" style="height: 260px;" src="img/jairo.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-primary btn-square" href="trofeo.php?red=Facebook"> <i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="trofeo.php?red=Twitter"><i class="fa-brands fa-x-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="trofeo.php?red=Linkedin"> <i class="fab fa-linkedin-in"></i> </a>
                                <a class="btn btn-outline-primary btn-square" href="trofeo.php?red=Instagram"><i class="fab fa-instagram"></i> </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate" style="font-size: 17px;">Garcia Guerrero Jairo</h5>
                            <p class="m-0"><b>Desarrollador Backend:</b> Jairo lidera al 
                            equipo como <b>Scrum Master</b>. Se encarga de guiar al equipo en 
                            la implementación de prácticas ágiles, eliminar los obstáculos 
                            que puedan surgir y fomentar una cultura de mejora continua 
                            para maximizar la eficiencia y la entrega de valor.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" style="height: 255px;" src="img/gabo.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-primary btn-square" href="trofeo.php?red=Facebook"> <i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="trofeo.php?red=Twitter"><i class="fa-brands fa-x-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="trofeo.php?red=Linkedin"> <i class="fab fa-linkedin-in"></i> </a>
                                <a class="btn btn-outline-primary btn-square" href="trofeo.php?red=Instagram"><i class="fab fa-instagram"></i> </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate">Luis Gabriel Sanchez</h5>
                            <p class="m-0"><b>Desarrollador Frontend</b>  Apasionado por la 
                            creatividad y la usabilidad, Luis Gabriel es un experto en 
                            desarrollo frontend. Transforma diseños en interfaces 
                            interactivas y atractivas, asegurando una experiencia 
                            de usuario excepcional en cada sitio web.<p>
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/migue.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-primary btn-square" href="trofeo.php?red=Facebook"> <i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="trofeo.php?red=Twitter"><i class="fa-brands fa-x-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="trofeo.php?red=Linkedin"> <i class="fab fa-linkedin-in"></i> </a>
                                <a class="btn btn-outline-primary btn-square" href="trofeo.php?red=Instagram"><i class="fab fa-instagram"></i> </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate" style="font-size: 17px;">Jesús Miguel Cerda González</h5>
                            <p class="m-0"><b> Desarrollador Backend:</b> 
                            Con un enfoque meticuloso y un amor 
                            por resolver problemas, Jesús Miguel 
                            es un experto en desarrollo backend. 
                            Trabaja incansablemente para garantizar 
                            que los sistemas detrás de cada sitio
                            web funcionen sin problemas y sean seguros.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/dulce.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-primary btn-square" href="trofeo.php?red=Facebook"> <i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="trofeo.php?red=Twitter"><i class="fa-brands fa-x-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="trofeo.php?red=Linkedin"> <i class="fab fa-linkedin-in"></i> </a>
                                <a class="btn btn-outline-primary btn-square" href="trofeo.php?red=Instagram"><i class="fab fa-instagram"></i> </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate" style="font-size: 17px;">Silva Torres Dulce Dolores</h5>
                            <p class="m-0"><b>Diseñador UX/UI:</b> Con un 
                            ojo para el diseño limpio y la experiencia del 
                            usuario, Dulce Dolores es una talentosa diseñadora
                            UX/UI. Crea interfaces intuitivas y visualmente
                            atractivas que cautivan a los usuarios y los guían
                            a través del contenido de manera eficiente.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonios</h6>
                <h1>Qué Dicen Nuestros Clientes</h1>
            </div>
            <div class="owl-carousel testimonial-carousel" >
                <div class="text-center pb-4">
                    <img class="img-fluid mx-auto" src="img/dulce2.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5"> Su 
                            enfoque centrado en el cliente y su capacidad 
                            para traducir nuestras ideas en un sitio web 
                            funcional y atractivo son incomparables</p>
                        <h5 class="text-truncate">Julieta Guadalupe López</h5>
                        <span>Estudiante</span>
                    </div>
                </div>
                <div class="text-center pb-4" >
                    <img class="img-fluid mx-auto" src="img/persona3.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">El equipo de desarrollo web capturó 
                            perfectamente la visión de mi negocio 
                            y la plasmó en un sitio web impresionante.</p>
                        <h5 class="text-truncate">Maria Araceli Balaguer</h5>
                        <span>Profesora</span>
                    </div>
                </div>
                <div class="text-center pb-4">
                    <img class="img-fluid mx-auto" src="img/gybby.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5" style="font-size: 15px;">El equipo de desarrollo web 
                            superó mis expectativas. Profesionalismo 
                            comunicación excepcional. ¡Gracias por crear mi sitio web! 
                            !Gibbeeeeeeeeeeeh¡</p>
                        <h5 class="text-truncate">Gibby Gibson</h5>
                        <span>Cliente</span>
                    </div>
                </div>
                <div class="text-center pb-4">
                    <img class="img-fluid mx-auto" src="img/persona4.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">Estoy encantado con el resultado final 
                            de mi sitio web. El equipo de desarrollo web fue 
                            increíblemente receptivo a mis necesidades y deseos.</p>
                        <h5 class="text-truncate">Alan Fernández</h5>
                        <span>Actor De Doblaje</span>
                    </div>
                </div>
                <div class="text-center pb-4">
                    <img class="img-fluid mx-auto" src="img/persona5.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5"> Desde el diseño inicial hasta el 
                            lanzamiento del sitio web, su 
                            capacidad para comprender mis requisitos fue impresionante. 
                            ¡Estoy extremadamente satisfecho con el resultado!</p>
                        <h5 class="text-truncate">Christian Charles Philip Bale</h5>
                        <span>Actor</span>
                    </div>
                </div>
                <div class="text-center pb-4">
                    <img class="img-fluid mx-auto" src="img/nuggets.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">¡Increíble experiencia trabajando con 
                            ellos! No solo crearon un sitio web hermoso 
                            para mi negocio, sino que también brindaron un soporte 
                            excepcional en cada etapa del proceso</p>
                        <h5 class="text-truncate">Ricardo García Noguez </h5>
                        <span>Estudiante</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

<?php
    include 'footer.php';   
?>
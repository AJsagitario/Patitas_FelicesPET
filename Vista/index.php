<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Principal</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        
        <link href="../css/index.css" rel="stylesheet" type="text/css"/>

        <!-- LOGO EN EL TITULO -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="icon" type="image/png" href="imagen/logo1-removebg-preview.png"/> 

    </head>
    <style>
        .carousel-item img {
            width: 220px; /* Ajusta el tamaño según necesites */
            height: auto;

            border-right-color: blueviolet;

        }
        /*Tamaño del carrusel*/
        #brandCarousel {
            width: 600px;
            margin: 0 auto;
        }
        /*fondo de la imagen */
        .carousel-inner {

            padding: 30px; /* Espaciado alrededor de las imágenes */

        }

    </style>
    <body>
        <section id="header">
            <header class="big_white shadow-sm py-3">
                <div class="container d-flex align-items-center justify-content-between">
                    <!-- LOGO -->
                    <a href="index.php">
                        <<img src="../imagen/logo1-removebg-preview.png" alt="Patitas Felices" height="70"/>
                    </a>
                    <!-- BARRA DE BUSQUEDA -->
                    <div class="input-group w-50">
                        <input type="text" class="form-control" placeholder="Search for products..">
                        <button class="btn btn-outline-secondary" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                    <!-- ICONO DE PERFIL Y CARRITO -->
                    <div class="d-flex aling-items-center">
                        <a href="#" class="me-3" text-dark>
                            <i class="fas fa-user" fa-lg></i>
                        </a>
                        <a href="#" class="position-relative text-dark">
                            <i class="fas fa-shopping-cart fa-lg"></i>
                            <span class="position-absolute top-0 star-100 translate-middle badge rounded-pill bg-danger">
                                0
                            </span>
                        </a>  
                    </div>
                </div>
                <!-- Menu de navegacion-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light mt-2">
                    <div class="container">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item"><a class="nav-link active" href="index.php">Inicio</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Categorias</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Marcas</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Quiénes somos</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Contáctanos</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
        </section>


        <section id="body">
            <div class="container text-center my-5">
                <div class="row">
                    <div class="col-md-4">
                        <img src="../imagen/gif/CAT2.gif" alt="catfeliz 1" class="img-fluid">
                    </div>
                    <div class="col-md-4">
                        <img src="../imagen/gif/compra.gif" alt="catfeliz 2" class="img-fluid">
                    </div>
                    <div class="col-md-4">
                        <img src="../imagen/gif/perros.gif" alt="catfeliz 3" class="img-fluid">
                    </div>
                </div>
                <h1 class="fw-bold text-primary mt-4">
                    "PATITAS FELICES, COMPRA FÁCIL, RÁPIDO Y BARATO PARA TU ENGREÍDO"
                </h1>
            </div> 
            <!-- TARJETAS DE PERRO Y GATO -->
            <div class="category-container text-center my-5">
                <div class="row justify-content-center">
                    <div class="col-md-4 d-flex">
                        <div class="card shadow-lg border-0 h-100 w-100">
                            <img src="../imagen/gatosparque.jpg" class="card-img-top img-fluid fixed-img" alt="Gatos">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Gatos</h5>
                                <a href="#" class="btn btn-primary">Productos Gatos</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="card shadow-lg border-0 h-100 w-100">
                            <img src="../imagen/perros-parque.jpg" class="card-img-top img-fluid fixed-img" alt="Perros">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Perros</h5>
                                <a href="#" class="btn btn-primary">Productos Perros</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="5000">
                        <div class="row">
                            <div class="col-md-4">
                                <article class="product">
                                    <img src="../imagen/ofertas/cambogat_ofertas.jpg" class="d-block" alt="...">
                                    <h2>CANBO 3KG CAT STERILIZED</h2>
                                    <p>Precio: S/159.00</p>
                                </article>
                            </div>
                            <div class="col-md-4">
                                <article class="product">
                                    <img src="../imagen/ofertas/churucat_ofertas.jpg" class="d-block" alt="...">
                                    <h2>CHURU SALMON PACK</h2>
                                    <p>Precio: S/12.00</p>     
                                </article> 
                            </div>
                            <div class="col-md-4">
                                <article class="product">
                                    <img src="../imagen/ofertas/collar_ofertas.png" class="d-block" alt="...">
                                    <h2>COLLAR GOLDKING DOG</h2>
                                    <p>Precio: S/10.00</p>   
                                </article> 
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <div class="row">
                            <div class="col-md-4">
                                <article class="product">
                                    <img src="../imagen/ofertas/dispensador_ofertas.jpg" class="d-block" alt="...">
                                    <h2>DISPENSADOR PET ALIMENTOS</h2>
                                    <p>Precio: S/99.00</p>     
                                </article> 
                            </div>
                            <div class="col-md-4">
                                <article class="product">
                                    <img src="../imagen/ofertas/gatocollar_ofertas.png" class="d-block" alt="...">
                                    <h2>COLLAR GATO RED</h2>
                                    <p>Precio: S/19.00</p>     
                                </article> 
                            </div>
                            <div class="col-md-4">
                                <article class="product">
                                    <img src="../imagen/ofertas/hilldog_ofertas.png" class="d-block" alt="...">
                                    <h2>HILL'S WEIGHT LOSS 3KG</h2>
                                    <p>Precio: S/159.00</p>     
                                </article> 
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>


            <section class="container my-5">
                <div class="bg-warning text-center py-2">
                    <h2 class="fw-bold">Marcas Principales</h2>
                </div>
                <div id="brandCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner text-center">
                        <div class="carousel-item active">
                            <img src="../imagen/slide_marcas/Brit-Logo.png" class="d-inline-block mx-3" alt="marca1">                                                       
                        </div>
                        <div class="carousel-item">
                            <img src="../imagen/slide_marcas/EQUILIBRIO_GATO.png" class="d-inline-block mx-3" alt="marca2">
                        </div>
                        <div class="carousel-item">
                            <img src="../imagen/slide_marcas/canbo.png" class="d-inline-block mx-3" alt="marca3">
                        </div>
                        <div class="carousel-item">
                            <img src="../imagen/slide_marcas/cat-chow_logo_500x300.png" class="d-inline-block mx-3" alt="marca4">
                        </div>
                        <div class="carousel-item">
                            <img src="../imagen/slide_marcas/dogchow.png" class="d-inline-block mx-3" alt="marca5">
                        </div>   
                        <div class="carousel-item">   
                            <img src="../imagen/slide_marcas/felix.png" class="d-inline-block mx-3" alt="marca6"> 
                        </div> 
                        <div class="carousel-item">  
                            <img src="../imagen/slide_marcas/friskis.png" class="d-inline-block mx-3" alt="marca7">
                        </div>
                        <div class="carousel-item">  
                            <img src="../imagen/slide_marcas/hillslogo.png" class="d-inline-block mx-3" alt="marca7">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#brandCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#brandCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button> 
                </div>
            </section>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243.97260517666882!2d-77.08527572178397!3d-11.935562097329711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105d11b77d79c11%3A0x70b44ad3dd050a4f!2sAsoc%20V%20Valle%20Chillon%20Jr%20Jasmines%20H37!5e0!3m2!1ses-419!2spe!4v1741445268766!5m2!1ses-419!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
        <section id="footer-container">
            <div class="container-section">
                <h3><i class="fas fa-phone-alt"></i>CONSULTANOS</h3>
                <p><i class="fas fa-mobile-alt"></i>992 245 544</p>
                <p><i class="fas fa-phone"></i>01 5055331</p>
                <p><i class="fas fa-envelope"></i> <a href="angellopezcardenas82@gmail.com">angellopezcardenas82@gmail.com</a></p>  
            </div>
            <div class="container-section">
                <h3>ATENCIÓN AL CLIENTE</h3>
                <ul>
                    <li><a href="#">Políticas de devoluciones</a></li>
                    <li><a href="#">Preguntas Frecuentes</a></li>
                    <li><a href="#">Términos y condiciones</a></li>
                    <li><a href="#">Libro de reclamaciones</a></li>
                    <li><a href="#">Política de privacidad</a></li>
                </ul>
            </div>
            <div class="container-section">
                <h3><i class="fas fa-store"></i>TIENDA/SERVICIOS</h3>
                <ul>
                    <li><a href="#">Alimentos</a></li>
                    <li><a href="#">Ropa</a></li>
                    <li><a href="#">Suplementos</a></li>
                    <li><a href="#">Accesorios</a></li>
                </ul>
                <div class="credit-card">
                    <h4><i class="fas fa-credit-card"></i>ACEPTAMOS TODAS LAS TARJETAS</h4>
                    <img width="413" height="45" src="../imagen/formas-de-pago_1.jpg" alt=""/>
                </div>
            </div>
            <div class="container-section">
                <h3><i class="fas fa-map-marker-alt"></i>¿DÓNDE ESTAMOS?</h3>
                <p><i class="fas fa-map-marker-alt"></i>Jr. Jasmines H37</p>
                <p><i class="fas fa-clock"></i>Horarios: Ln-Sb:9am - 6pm</p>
            </div>
            <div class="enlace">
                <a href="https://wa.me/51992245544" class="whatsapp-float" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </div>

        </section>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- script del slider-->
        <script src="../js/slider.js"></script>
    </body>
</html>

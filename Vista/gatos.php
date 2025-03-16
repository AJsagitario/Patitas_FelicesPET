<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <link href="css/index.css" rel="stylesheet" type="text/css"/>
    <?php include 'head.php'; ?>
    <style>
        /* Contenedor de la imagen con fondo */
        .contenedor {
            position: relative; /* Permite posicionar elementos hijos de forma absoluta */
            display: flex; /* Usa flexbox para centrar el contenido */
            justify-content: center; /* Centra los elementos horizontalmente */
            align-items: center; /* Centra los elementos verticalmente */
            width: 100%; /* Ocupa todo el ancho disponible */
            padding: 10px 0; /* Espaciado superior e inferior */

            background-image: url("../imagen/gatos/img.png");
            background-size: cover; /*pone la imagen en todo el marco */
            background-position: center;
            background-repeat: no-repeat; /* Evita que la imagen se repita */

            border-radius: 10px 100px / 120px; /* Redondea las esquinas de forma personalizada */
            border: thick double #25d366; /* Agrega un borde doble con color verde */
            overflow: hidden;  /* Oculta cualquier contenido que sobresalga */
        }
        /*efecto de transparencia */
        .contenedor::after{
            content: ""; /* Necesario para generar el pseudo-elemento */
            position: absolute; /* Se posiciona sobre el contenedor */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.2); /*oscurece un poco el fondo */
            border-radius: 10px 100px / 120px;
        }
        /* Imagen */
        .caja img {
            width: 700px; /* Establece un tamaño fijo para la imagen */
            height: auto; /* Mantiene la proporción de la imagen */
            display: block; /* Evita espacios en blanco innecesarios */
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.5);/* Agrega una sombra para que resalte */
            transition: transform 0.3s ease-in-out; /* Suaviza la animación cuando el usuario pasa el mouse */
        }
        .caja img:hover{
            transform: scale(1.05);
        }
        .titulo{
            position: absolute;/* Permite colocarlo en cualquier parte dentro del contenedor */
            top: 10%; /* Lo posiciona un 10% desde la parte superior */
            left: 50%; /* Lo centra horizontalmente */
            transform: translate(-50%,-50%); /* Ajusta la posición exacta para centrarlo */
            font-size: 24px;
            color: white;
            background: rgba(0,0,0,0.5);
            padding: 10px 20px;
            border-radius: 10px;
        }
        /*CARRUSEL */
        .slick-carousel {
            max-width: 90%;
            margin: auto;
        }

        .producto {
            text-align: center;
            padding: 10px;
        }

        .producto img {
            width: 100%;
            max-width: 200px;
            border-radius: 10px;
            transition: transform 0.3s ease-in-out;
        }

        .producto:hover img {
            transform: scale(1.1);
        }

        .agregar-carrito {
            background-color: #25d366;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .agregar-carrito:hover {
            background-color: #1ebe5d;
        }

        /* Ajuste de Slick */
        .slick-prev, .slick-next {
            font-size: 24px;
            color: #333;
        }

        .slick-dots {
            bottom: -30px;
        }
    </style>
    <body>
        <section id="header">
            <div class="contenedor-flex">
                <div class="container d-flex align-items-center justify-content-between">
                    <!-- LOGO -->
                    <a href="index.php">
                        <img src="../imagen/logo1-removebg-preview.png" alt="Patitas Felices" height="70"/>
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
                        <a href="mi_cuenta.php" class="me-3" text-dark>
                            <i class="fas fa-user" fa-lg></i>
                        </a>
                        <a href="#" class="position-relative text-dark">
                            <i class="fas fa-shopping-cart fa-lg"></i>
                            <span class="position-absolute top-0 star-100 translate-middle badge rounded-pill bg-danger">
                                0
                            </span>
                        </a>  
                    </div>
                    <!-- Redes sociales -->
                    <div class="redes-sociales">
                        <a href="https://www.facebook.com/AjLopezC"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.instagram.com/ajsagitario19/"><i class="fab fa-instagram"></i></a>
                        <a href="https://twitter.com/Aj25644436"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="contenedor">
            <div class="caja">
                <h2 class="titulo">¡Encuentra lo mejor para tu engreído gatuno!</h2>
                <img src="../imagen/gatos/catswalpaper-removebg-preview.png" alt="fondo"/>
            </div> 
        </section>
        <br>
        <div class="food">
            <h2 class="text-center fw-bold bg-info-subtle">Alimentos de Calidad</h2>
            <div class="slick-carousel">
                <div class="producto">
                    <img src="../imagen/gatos/comida/14688-1.png" alt="Producto 1"/>
                    <h4 class="name text-center fst-italic">Brit Fillets Cat Salmon</h4>
                    <h5 class="precio fw-bolder">S/. 8.00</h5>
                    <button class="agregar-carrito">Agregar Carrito</button>
                </div>                      
                <div class="producto">
                    <img src="../imagen/gatos/comida/BC-HAIRCARE-800x1000-1.png" alt="Producto 2"/>
                    <h4 class="name text-center fst-italic">Brit HairCare 3KG Salmon</h4>
                    <h5 class="precio fw-bolder">S/. 130.00</h5>
                    <button class="agregar-carrito">Agregar Carrito</button>
                </div>
                <div class="producto">
                    <img src="../imagen/gatos/comida/brit pate vet diet cat 200gr.jpg" alt="Producto 3"/>
                    <h4 class="name text-center fst-italic">Brit Pate Vet Diet Cat 200gr</h4>
                    <h5 class="precio fw-bolder">S/. 8.00</h5>
                    <button class="agregar-carrito">Agregar Carrito</button>
                </div>
                <div class="producto">
                    <img src="../imagen/gatos/comida/brit-care-cat-missy-sterilised-hypoallergenic.png" alt="Producto 4"/>
                    <h4 class="name text-center fst-italic">Brit Care Beef Olive</h4>
                    <h5 class="precio fw-bolder">S/. 22.00</h5>
                    <button class="agregar-carrito">Agregar Carrito</button>
                </div>
                <div class="producto">
                    <img src="../imagen/gatos/comida/brit-premium-cat-adult.png" alt="Producto 5"/>
                    <h4 class="name text-center fst-italic">Brit Care Fillets Sterilized</h4>
                    <h5 class="precio fw-bolder">S/. 9.00</h5>
                    <button class="agregar-carrito">Agregar Carrito</button>
                </div>
                <div class="producto">
                    <img src="../imagen/gatos/comida/brit-premium-cat-kitten.png" alt="Producto 6"/>
                    <h4 class="name text-center fst-italic">Brit Care Tuna</h4>
                    <h5 class="precio fw-bolder">S/. 8.00</h5>
                    <button class="agregar-carrito">Agregar Carrito</button>
                </div>
                <div class="producto">
                    <img src="../imagen/gatos/comida/brit-sachet.png" alt="Producto 7"/>
                    <h4 class="name text-center fst-italic">Brit Cat Sterilised 3kg</h4>
                    <h5 class="precio fw-bolder">S/. 138.00</h5>
                    <button class="agregar-carrito">Agregar Carrito</button>
                </div>
                <div class="producto">
                    <img src="../imagen/gatos/comida/brit_care_beef_olive.png" alt="Producto 8"/>
                    <h4 class="name text-center fst-italic">Brit Fillets Cat Salmon</h4>
                    <h5 class="precio fw-bolder">S/. 8.00</h5>
                    <button class="agregar-carrito">Agregar Carrito</button>
                </div>
                <div class="producto">
                    <img src="../imagen/gatos/comida/brit_care_fillets_in_gravy-web-3.png" alt="Producto 9"/>
                    <h4 class="name text-center fst-italic">Brit Premium Salmon 7kg</h4>
                    <h5 class="precio fw-bolder">S/. 225.00</h5>
                    <button class="agregar-carrito">Agregar Carrito</button>
                </div>
                <div class="producto">
                    <img src="../imagen/gatos/comida/brit_care_tuna_shrimp.png" alt="Producto 10"/>
                    <h4 class="name text-center fst-italic">Brit Premiun Gatitos Salmon 1kg</h4>
                    <h5 class="precio fw-bolder">S/. 48.00</h5>
                    <button class="agregar-carrito">Agregar Carrito</button>
                </div>
            </div>
        </div>
    </body>
    <script>
        $(document).ready(function () {
            $('.slick-carousel').slick({
                slidesToShow: 3, // Muestra 3 productos a la vez
                slidesToScroll: 1, // Se mueve de uno en uno
                autoplay: true, // Auto desplazamiento
                autoplaySpeed: 2000, // Cada 2 segundos
                dots: true, // Indicadores abajo
                arrows: true, // Flechas de navegación
                responsive: [
                    {
                        breakpoint: 768, // En tablets muestra 2
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 480, // En móviles muestra 1
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });
        });
    </script>
    <?php include 'footer.php'; ?>
</html>

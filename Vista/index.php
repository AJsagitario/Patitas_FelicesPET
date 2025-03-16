<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <link href="css/index.css" rel="stylesheet" type="text/css"/>
    <?php include 'head.php'; ?>
    <?php include 'header.php'; ?>
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
                            <a href="gatos.php" class="btn btn-primary">Productos Gatos</a>
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
        <div class="container my-5">
            <div class="text-center py-2">
                <h2 class="titulo-seccion">Ofertas Exclusivas</h2>
            </div>
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="5000">
                        <div class="row">
                            <div class="col-md-4">
                                <article class="product">
                                    <img src="../imagen/ofertas/cambogat_ofertas.jpg" class="d-block" width="150" height="auto" alt="...">
                                    <h2>CANBO 3KG CAT STERILIZED</h2>
                                    <p>Precio: S/159.00</p>
                                </article>
                            </div>
                            <div class="col-md-4">
                                <article class="product">
                                    <img src="../imagen/ofertas/churucat_ofertas.jpg" class="d-block" width="150" height="auto" alt="...">
                                    <h2>CHURU SALMON PACK</h2>
                                    <p>Precio: S/12.00</p>     
                                </article> 
                            </div>
                            <div class="col-md-4">
                                <article class="product">
                                    <img src="../imagen/ofertas/collar_ofertas.png" class="d-block" width="150" height="auto" alt="...">
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
                                    <img src="../imagen/ofertas/dispensador_ofertas.jpg" class="d-block" width="150" height="auto" alt="...">
                                    <h2>DISPENSADOR PET ALIMENTOS</h2>
                                    <p>Precio: S/99.00</p>     
                                </article> 
                            </div>
                            <div class="col-md-4">
                                <article class="product">
                                    <img src="../imagen/ofertas/gatocollar_ofertas.png" class="d-block" width="150" height="auto" alt="...">
                                    <h2>COLLAR GATO RED</h2>
                                    <p>Precio: S/19.00</p>     
                                </article> 
                            </div>
                            <div class="col-md-4">
                                <article class="product">
                                    <img src="../imagen/ofertas/hilldog_ofertas.png" class="d-block" width="150" height="auto" alt="...">
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
        </div>
        <section class="container my-5">
            <div class="text-center py-2">
                <h2 class="titulo-seccion">Marcas Principales</h2>
            </div>
            <div id="brandCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner text-center">
                    <div class="carousel-item active">
                        <img src="../imagen/slide_marcas/Brit-Logo.png" class="d-inline-block mx-3" width="150" height="auto" alt="marca1">                                                       
                    </div>
                    <div class="carousel-item">
                        <img src="../imagen/slide_marcas/EQUILIBRIO_GATO.png" class="d-inline-block mx-3" width="150" height="auto" alt="marca2">
                    </div>
                    <div class="carousel-item">
                        <img src="../imagen/slide_marcas/canbo.png" class="d-inline-block mx-3" width="150" height="auto" alt="marca3">
                    </div>
                    <div class="carousel-item">
                        <img src="../imagen/slide_marcas/cat-chow_logo_500x300.png" class="d-inline-block mx-3" width="150" height="auto" alt="marca4">
                    </div>
                    <div class="carousel-item">
                        <img src="../imagen/slide_marcas/dogchow.png" class="d-inline-block mx-3" width="150" height="auto" alt="marca5">
                    </div>   
                    <div class="carousel-item">   
                        <img src="../imagen/slide_marcas/felix.png" class="d-inline-block mx-3" width="150" height="auto" alt="marca6"> 
                    </div> 
                    <div class="carousel-item">  
                        <img src="../imagen/slide_marcas/friskis.png" class="d-inline-block mx-3" width="150" height="auto" alt="marca7">
                    </div>
                    <div class="carousel-item">  
                        <img src="../imagen/slide_marcas/hillslogo.png" class="d-inline-block mx-3" width="150" height="auto" alt="marca7">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#brandCarousel" width="150" height="auto" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#brandCarousel" width="150" height="auto" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button> 
            </div>
        </section>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243.97260517666882!2d-77.08527572178397!3d-11.935562097329711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105d11b77d79c11%3A0x70b44ad3dd050a4f!2sAsoc%20V%20Valle%20Chillon%20Jr%20Jasmines%20H37!5e0!3m2!1ses-419!2spe!4v1741445268766!5m2!1ses-419!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <?php include 'footer.php'; ?>

</html>

<?php
/* Template Name: Front Page */
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name');?></title>
    <?php wp_head(); ?>
</head>
<?php 
$page_mentoria = get_page_by_path( 'mentoria' );
$page_inicio = get_page_by_path( 'home' );  
$page_sobre_mi = get_page_by_path( 'sobre mi' );  
$page_taller  = get_page_by_path( 'taller' );  
$page_talleres = get_page_by_path( 'talleres' );
 
?>
<body>
    <div class="full-device-menu">
        <div class="menu-relative">
            <ul class="navbar-nav ml-auto aligned">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_permalink( $page_mentoria->ID  ) ?>" yellow>Mentoría personalizada</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_permalink( $page_sobre_mi->ID  ) ?>#nosotros" yellow>Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" yellow>Youtube</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_permalink( $page_sobre_mi->ID  ) ?>#testimonios" yellow>Testimonios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_permalink( $page_sobre_mi->ID  ) ?>" yellow>Contacto</a>
                </li>
                <!--<li>
                    <a id="search-nav" class="nav-link" href="#"><i class="fas fa-search"></i></a>
                </li>-->
            </ul>
        </div>
    </div>
    <!--Header-->
    <header>
        <div class="container-fluid">
            <div class="row">
                
            </div>
        </div>
        <div class="row m-0">
            <div class="banner-image" style="background-image: url('<?= get_template_directory_uri() ?>/images/banner.png');">
                <div class="veil">
                    <div class="container">
                        <nav class="navbar navbar-toggleable-md ">                         
                            <!--Burger button-->
                            <div class="navbar-toggler navbar-toggler-right">
                                <div class="btn-burger">
                                    <div class="burger-line"></div>
                                    <div class="burger-line"></div>
                                    <div class="burger-line"></div>
                                </div>
                            </div>
                            <!--logo  area-->
                            <a class="navbar-brand" href="<?php echo get_permalink( $page_inicio->ID  ) ?>">
                                <img class="d-block img-fluid logo-image" src="<?= get_template_directory_uri() ?>/images/logo-white.png" alt="First slide">
                            </a>
                            <!--Menu-->
                            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                                <ul class="navbar-nav ml-auto aligned">
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo get_permalink( $page_mentoria->ID  ) ?>" bold yellow>Mentoría personalizada</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo get_permalink( $page_sobre_mi->ID  ) ?>#nosotros" bold yellow>Nosotros</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" bold yellow>Youtube</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo get_permalink( $page_sobre_mi->ID  ) ?>#testimonios" bold yellow>Testimonios</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo get_permalink( $page_sobre_mi->ID  ) ?>" bold yellow>Contacto</a>
                                    </li>
                                    <!--<li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fas fa-search"></i></a>
                                    </li>-->
                                </ul>
                            </div>
                        </nav>
                        <div class="row">
                            <div class="offset-md-6"></div>
                            <div class="col-12 col-md-6 banner-info">
                                <div class="row banner-title">
                                    INVIERTE EN TU MENTE
                                </div>
                                <div class="row banner-subtitle">
                                    ¡Invierte en tu mejor activo!
                                </div>
                                <div class="row banner-content">
                                    Tenemos la particular seguridad de que 
                                    el bien más preciado y valioso que tenemos 
                                    es nuestra mente. Por ello, tenemos la certeza de que la primera inversión acertada que 
                                    podemos hacer es brindarle herramientas a nuestra mente para cambiar nuestra realidad.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Fin Header-->

    <!--Navbar-->
    <div class="container-fluid" bg-purple>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="navbar-nav navbar-nav-horizontal ml-auto aligned selector">
                        <li class="nav-item ">
                            <a class="nav-link" href="#seminario">Seminarios</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#taller">Talleres</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin navbar-->
    <br>
    <br>
    <!--Post-->
    <section class="grid-post">
        <div class="container-fluid" id="seminario">
            <div class="container sm-no-pd">
                <div class="row">
                    <div class="col-12 sm-no-pd">
                        <div class="card">
                            <img class="card-img-top image-card" src="<?= get_template_directory_uri() ?>/images/laptop.jpg" alt="Card image cap">
                            <div class="mybadge">
                                <div class="round-star">
                                    
                                </div>
                                <p class="text-mybadge badge-title">NUEVO</p>
                            </div>
                            <div class="card-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-7 col-sm-9 col-md-9 col-lg-9 col-xl-9">
                                            <h5 class="card-title">Seminario <span bold>Invierte en tu mente</span></h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="#" class="btn-large btn-buy" data-toggle="modal" data-target="#exampleModalCenter">Comprar</a>
                                        </div>
                                        <div class="col-5 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="box-price">
                                                <div class="price">
                                                    <p class="price-number" >$30</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title modal-subtitle" id="exampleModalLongTitle">Metodos de Pago</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h4 class="modal-content">Pago con Paypal</h4>
                                <div class="paypal-btn">
                                    <?php echo do_shortcode( '[wpecpp name="Taller" price="30" align="left"]' ); ?>
                                </div>
                                <br>
                                <br>
                                <h4 class="modal-content">Pago con Tarjeta de credito</h4>
                                <!--<button>Boton Tarjeta de credito</button>-->
                                <div class="stipe-btn">
                                    <?php echo do_shortcode( '[simpay id="8"]' ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center ">
                            <a class="effect-link more" href="<?php echo get_permalink( $page_talleres->ID  ) ?>">Ver más <i class="fas fa-arrow-right"></i></a>
                        </p>
                        <hr br-purple>
                    </div>   
                </div>
            </div>
        </div>
        <br>
        <br>
        <!--taller-->
        <div class="container-fluid" id="taller">
            <div class="container sm-no-pd">
                <div class="row">
                    <div class="col-12 sm-no-pd">
                        <div class="card" >
                            <img class="card-img-top image-card" src="<?= get_template_directory_uri() ?>/images/tallerMTV_1.jpg" alt="Card image cap">
                            <div class="mybadge">
                                <div class="round-star">
                                    
                                </div>
                                <p class="text-mybadge badge-title">NUEVO</p>
                            </div>
                            <div class="card-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-7 col-sm-9 col-md-9 col-lg-9 col-xl-9">
                                            <h5 class="card-title">Taller <span bold>Monetiza tu vida</span></h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="#" class="btn-large btn-buy" data-toggle="modal" data-target="#ModalTallerCenter">Comprar</a>
                                        </div>
                                        <div class="col-5 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="box-price">
                                                <div class="price">
                                                    <p class="price-number" >$30</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="ModalTallerCenter" tabindex="-1" role="dialog" aria-labelledby="ModalTallerCenter" aria-hidden="true">
                    <div class="modal-dialog modal-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title modal-subtitle" id="exampleModalLongTitle">Metodos de Pago</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h4 class="modal-content">Pago con Paypal</h4>
                                <div class="paypal-btn">
                                    <?php echo do_shortcode( '[wpecpp name="Taller" price="30" align="left"]' ); ?>
                                </div>
                                <br>
                                <br>
                                <h4 class="modal-content">Pago con Tarjeta de credito</h4>
                                <!--<button>Boton Tarjeta de credito</button>-->
                                <div class="stipe-btn">
                                    <?php echo do_shortcode( '[simpay id="8"]' ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-12">
                        <p class="text-center ">
                            <a class="effect-link more" href="<?php echo get_permalink( $page_taller->ID  ) ?>">Ver más <i class="fas fa-arrow-right"></i></a>
                        </p>
                        <hr br-purple>
                    </div>   
                </div>
            </div>
        </div>
        <br>
        <br>
        <!--taller-->
        <div class="container-fluid" id="taller">
            <div class="container sm-no-pd">
                <div class="row">
                    <div class="col-12 sm-no-pd">
                        <div class="card" >
                            <img class="card-img-top image-card" src="<?= get_template_directory_uri() ?>/images/tallerMTV_1ve.jpg" alt="Card image cap">
                            <div class="mybadge">
                                <div class="round-star">
                                    
                                </div>
                                <p class="text-mybadge badge-title">NUEVO</p>
                            </div>
                            <div class="card-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-7 col-sm-9 col-md-9 col-lg-9 col-xl-9">
                                            <h5 class="card-title">Taller <span bold>Monetiza tu vida VZLA</span></h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="#" class="btn-large btn-buy" data-toggle="modal" data-target="#ModalTallerCenterVzla">Comprar</a>
                                        </div>
                                        <div class="col-5 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="box-price">
                                                <div class="price">
                                                    <p class="price-number" >$30</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="ModalTallerCenterVzla" tabindex="-1" role="dialog" aria-labelledby="ModalTallerCenterVzla" aria-hidden="true">
                    <div class="modal-dialog modal-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title modal-subtitle" id="exampleModalLongTitle">Metodos de Pago</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h4 class="modal-content">Transferencia Bancaria</h4>
                                <br>
                                <p> <span bold purple>Numero de cuenta:</span> 0000-0000-00-0000000000</p>
                                <p> <span bold purple>Nombre:</span> Pablo Perez</p>
                                <p> <span bold purple>Tipo de cuenta:</span> Corriente</p>
                                <p> <span bold purple>Nota: </span> Enviar comprobante por correo a Invierteentumente.la@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Fin post-->

    <br>
    <br>
    <!--Aptitudes-->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">¿Que te pueden ofrecer mis talleres?</h2>
                    <p class="text-center">Hablas tu pajita blablabla</p>
                </div>
            </div>
            <br>
            <br>
            <div class="row center-row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-3 col-lg-2 col-xl-2 desktop-no-pdr">
                            <div class="image-aptitud">
                                <div class="circle">
                                    <i class="far fa-user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-9 col-lg-10 col-xl-10 desktop-no-pdl">
                            <div class="text-aptitud">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam provident voluptate in nemo doloribus dignissimos et delectus assumenda at quam dolores illo odio perspiciatis, quos aperiam ipsum perferendis sed facilis!</p>   
                            </div>
                        </div>  
                    </div>    
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="row">
                        <div class="col-12 col-md-3 col-lg-2 col-xl-2 desktop-no-pdr">
                            <div class="image-aptitud">
                                <div class="circle">
                                    <i class="far fa-user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-9 col-lg-10 col-xl-10  desktop-no-pdl">
                            <div class="text-aptitud">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam provident voluptate in nemo doloribus dignissimos et delectus assumenda at quam dolores illo odio perspiciatis, quos aperiam ipsum perferendis sed facilis!</p>   
                            </div>
                        </div>  
                    </div>    
                </div>
            </div>
            <br class="m-hidden">
            <br>
            <div class="row center-row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-3 col-lg-2 col-xl-2 desktop-no-pdr">
                            <div class="image-aptitud">
                                <div class="circle">
                                    <i class="far fa-user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-9 col-lg-10 col-xl-10 desktop-no-pdl">
                            <div class="text-aptitud">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam provident voluptate in nemo doloribus dignissimos et delectus assumenda at quam dolores illo odio perspiciatis, quos aperiam ipsum perferendis sed facilis!</p>   
                            </div>
                        </div>  
                    </div>    
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-3 col-lg-2 col-xl-2 desktop-no-pdr">
                            <div class="image-aptitud">
                                <div class="circle">
                                    <i class="far fa-user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-9 col-lg-10 col-xl-10  desktop-no-pdl">
                            <div class="text-aptitud">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam provident voluptate in nemo doloribus dignissimos et delectus assumenda at quam dolores illo odio perspiciatis, quos aperiam ipsum perferendis sed facilis!</p>   
                            </div>
                        </div>  
                    </div>    
                </div>
            </div>
            <div class="row center-row"> <!--firma--> 
                <div class="col-12 col-md-6">
                    <div class="firma">
                        <img style="transform: rotateZ(90deg);" src="<?= get_template_directory_uri() ?>/images/svg/firma.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Fin Aptitudes-->
    <br>
    <br>
    <?php get_footer( );?>
</body>
</html>
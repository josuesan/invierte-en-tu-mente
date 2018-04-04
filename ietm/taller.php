<?php
/* Template Name: Taller */
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
<body class="taller">
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
    <div class="container-fluid" bg-purple-white-gradient>
        <div class="row">
            <!--Header-->
            <header class="header-talleres">
                <div class="container-fluid">
                    <div class="row">
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
                                        <!--li class="nav-item">
                                            <a class="nav-link" href="#"><i class="fas fa-search"></i></a>
                                        </li-->
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>         
            </header>
            <!-- Fin Header-->           
            <!-- Info Taller -->
            <div class="container-fluid">
                <div class="container taller-layout">
                    <div class="row">
                        <div class="col-12">
                            <!--Title area-->
                            <div class="title-area">
                                <p class="banner-talleres">Taller</p>
                                <h1 class="banner-talleres-light">Monetiza tu vida</h1>
                                <p class="banner-precio" bold yellow>30$</p>
                                <a href="" class="btn-large btn-buy-white" data-toggle="modal" data-target="#ModalTaller">Comprar</a>
                                <p class="banner-extra" white italic>Contiene Material de apoyo</p>
                            </div>
                        </div>
                    </div>
                    <div class="info-container">
                        <div class="row">
                            <div class="col-12">
                                <p class="question" yellow bold>¿Qué contiene?</p>
                                <p white>1- Te enseñaremos los principios psicológicos para atraer el dinero a tu vida.</p>
                                <p white>2- Te brindaremos asesoramiento objetivo con herramientas para ganar dinero sin salir de tu casa.</p>
                                <p white>3- Aprenderás lo que necesitas para ser un emprendedor online sin tener que invertir más de 300$ y generando cifras de hasta 1000$ mensuales.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <p class="question" yellow bold>¿Qué lograrás?</p>
                                <p white>1- Tomar el control de tu vida financiera.</p>
                                <p white>2- Conseguir tu propósito financiero y sacar el máximo provecho de él.</p>
                                <p white>3- Generar ingresos mayores a 1000$ mensuales.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <!--Pay buttons-->
                            <div class="pay-area">
                                <h4 white>Comprar Taller</h4>
                                <p class="oferta" white>A partir de Mayo por solo <span>$30</span></p>
                                <a href="#" class="btn-large btn-buy-white" data-toggle="modal" data-target="#ModalTaller">Comprar</a>
                                <br>
                                <!-- Modal -->
                                <div class="modal fade" id="ModalTaller" tabindex="-1" role="dialog" aria-labelledby="ModalTallerCenter" aria-hidden="true">
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
                                <div class="row card-logos">
                                    <div class="col-3"><img src="<?= get_template_directory_uri() ?>/images/paypal.jpg" alt=""></div>
                                    <div class="col-3"><img src="<?= get_template_directory_uri() ?>/images/master.jpg" alt=""></div>
                                    <div class="col-3"><img src="<?= get_template_directory_uri() ?>/images/visa.jpg" alt=""></div>
                                    <div class="col-3"><img src="<?= get_template_directory_uri() ?>/images/maestro.jpg" alt=""></div>
                                </div>
                            </div>
                            <a href="<?= home_url( '/' ); ?>">                       
                                <div class="back-box">
                                    <p class="back-btn" white>Regresar al home</p>
                                </div>
                            </a>
                        </div>
                    </div> 
                </div>
            </div>
            <!-- Fin info taller -->
            </div>
        </div>
    </div>
</body>
</html>
<?php
/* Template Name: Pagina Mentoria */
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
<body >
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
    <div class="container-fluid" bg-yellow-gradient>
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
                                    <img class="d-block img-fluid logo-image" src="<?= get_template_directory_uri() ?>/images/logo-black.png" alt="First slide">
                                </a>
                                <!--Menu-->
                                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                                    <ul class="navbar-nav ml-auto aligned mentoria-pag">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo get_permalink( $page_mentoria->ID  ) ?>" purple bold>Mentoría especializda</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo get_permalink( $page_sobre_mi->ID  ) ?>#nosotros" bold purple>Nosotros</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" bold purple>Youtube</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo get_permalink( $page_sobre_mi->ID  ) ?>#testimonios" bold purple>Testimonios</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo get_permalink( $page_sobre_mi->ID  ) ?>" bold purple>Contacto</a>
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
                                <h1 class="banner-mentoria" purple>Mentoría</h1>
                                <p class="banner-mentoria-light" purple>Personalizada</p>
                            </div>
                            <!--Description title-->
                            <p class="content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla fugit debitis saepe omnis suscipit consequatur, neque, aspernatur rem corporis quia dolores quam odio earum repellat, aut molestiae laudantium similique laboriosam.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <!--Content-->
                            <h2 class="section-title-mentoria">Beneficios</h2>
                            <p class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident at totam voluptatibus perferendis, incidunt veniam minima dolorum praesentium sunt repellat, officia ut veritatis maxime quis in laudantium rerum deserunt ipsum.</p>
                            <br>
                            <p class="section-title-mentoria">
                                Si me sigues en las redes, ya estás listo para hacer el cambio
                            </p>
                            <br>
                            <h2 class="section-title-mentoria mr-15">Objetivo</h2>
                            <p class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nesciunt accusantium totam ut aliquid magni doloribus delectus consectetur voluptas nobis nemo ducimus facere voluptatum, quos eum nisi odit quisquam. Accusamus.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <!--Time -->
                            <div class="time-area">
                                <h4 class="section-title-mentoria">Duracion</h4>
                                <p class="big-number mb-0" >50</p>
                                <p class="time-text">minutos</p>
                            </div>
                            <br class="d-hidden">
                            <br class="d-hidden">
                        </div>
                        <div class="col-12 col-md-6">
                            <!--Pay buttons-->
                            <div class="buy-area">
                                <h4 class="section-title-mentoria">Precio</h4>
                                <p class="big-number" >$100</p>
                                <a href="" class="btn-large btn-buy-white" data-toggle="modal" data-target="#ModalTallerCenter">Comprar</a>
                                <br>
                                <br>
                                
                                <div class="row card-logos">
                                    <div class="col-3"><img src="<?= get_template_directory_uri() ?>/images/paypal.jpg" alt=""></div>
                                    <div class="col-3"><img src="<?= get_template_directory_uri() ?>/images/master.jpg" alt=""></div>
                                    <div class="col-3"><img src="<?= get_template_directory_uri() ?>/images/visa.jpg" alt=""></div>
                                    <div class="col-3"><img src="<?= get_template_directory_uri() ?>/images/maestro.jpg" alt=""></div>
                                </div>

                                <!--ul class="navbar-nav navbar-nav-horizontal ml-auto aligned justify-content-mobile" >
                                    <li class="card-logos-box"> <img src="./images/svg/paypal.svg" alt=""> </li>
                                    <li class="card-logos-box"> <img src="./images/svg/master-card.svg" alt=""> </li>
                                    <li class="card-logos-box"> <img src="./images/svg/visa.svg" alt=""> </li>
                                    <li class="card-logos-box"> <img src="./images/svg/maestro.svg" alt=""> </li>
                                </ul-->
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
                    <div class="row">
                        <div class="col-12">
                            <!-- Fin info taller -->
                            <a href="<?= home_url( '/' ); ?>">
                                <div class="back-box">
                                    <p class="back-btn" purple>Regresar</p>
                                </div>
                            </a>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php
/* Template Name: Talleres */
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
    <div class="container-fluid" bg-purple-gradient>
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
                                            <a class="nav-link" href="<?php echo get_permalink( $page_sobre_mi->ID  ) ?>" bold yellow>Youtube</a>
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
                                <p class="banner-talleres">Seminario</p>
                                <h1 class="banner-talleres-light">Invierte en tu mente</h1>
                                <br>
                                <a href="" class="btn-large btn-buy-white" data-toggle="modal" data-target="#ModalTaller">Comprar</a>
                                <br>
                                <br>
                            </div>
                            <!--Description title-->
                            <p white>La mente guía la acción, está es uno de tus recursos más valiosos, no lo desperdicies, deja que tus pensamientos vayan más allá de ello.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <!--Content-->
                            <h2 class="section-title mr-15">¿Qué Aprenderás?</h2>
                            <ul class="list-aprender">
                                <li>
                                    <h3 class="subtitle-aprender">La psicología del emprendedor exitoso</h3>
                                    <p white>Para ser un emprendedor exitoso debes tener hábitos particulares. Al formar parte de nuestra comunidad de emprendedores te damos tips y estrategias que te permitirán llegar al éxito.</p>
                                </li>
                                <li>
                                    <h3 class="subtitle-aprender">A internalizar el poder de las posibilidades</h3>
                                    <p white>Cualquier proyecto puede llegar a realizarse aunque a veces en un principio parezca imposible, planteándose objetivos a corto, mediano y largo plazo se pueden materializar tus deseos.</p>
                                </li>
                                <li>
                                    <h3 class="subtitle-aprender">A Canalizar inversiones</h3>
                                    <p white>El reto consiste en crear mecanismos financieros que permitan generar ingresos exponencialmente. Por ello, te brindaremos alternativas de inversión de mercado que se manejan en la actualidad.</p>
                                </li>
                                <li>
                                    <h3 class="subtitle-aprender">Oportunidades únicas para proyectar tu pasión</h3>
                                    <p white>Saber reconocer las oportunidades no es una cosa fácil en cuestión, sin embargo aprenderás herramientas que facilitarán la toma de decisiones al momento de presentarse una oportunidad. </p>
                                </li>
                            </ul>
                            <br>
                            <p white>Haz lo que te gusta y hazlo con pasión, que tu momento es ahora</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <!--Pay buttons-->
                            <div class="pay-area">
                                <p class="oferta" white>A partir de Mayo por solo <span>$30</span></p>
                                <a href="" class="btn-large btn-buy-white" data-toggle="modal" data-target="#ModalTaller">Comprar</a>
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
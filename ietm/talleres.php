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
                                    <img class="d-block img-fluid" src="<?= get_template_directory_uri() ?>/images/logo.png" alt="First slide">
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
                                <a href="" class="btn-large btn-buy-white">Comprar</a>
                                <br>
                                <br>
                            </div>
                            <!--Description title-->
                            <p white>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla fugit debitis saepe omnis suscipit consequatur, neque, aspernatur rem corporis quia dolores quam odio earum repellat, aut molestiae laudantium similique laboriosam.</p>
                            <p white>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla fugit debitis saepe omnis suscipit consequatur, neque, aspernatur rem corporis quia dolores quam odio earum repellat, aut molestiae laudantium similique laboriosam.</p>
                            <p white>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla fugit debitis saepe omnis suscipit consequatur, neque, aspernatur rem corporis quia dolores quam odio earum repellat, aut molestiae laudantium similique laboriosam.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <!--Content-->
                            <h2 class="section-title mr-15">¿Que contiene?</h2>
                            <p white>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nesciunt accusantium totam ut aliquid magni doloribus delectus consectetur voluptas nobis nemo ducimus facere voluptatum, quos eum nisi odit quisquam. Accusamus.</p>
                            <p white>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nesciunt accusantium totam ut aliquid magni doloribus delectus consectetur voluptas nobis nemo ducimus facere voluptatum, quos eum nisi odit quisquam. Accusamus.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <!--Pay buttons-->
                            <div class="pay-area">
                                <h4 white>Comprar Seminario</h4>
                                <p class="oferta" white>A partir de Mayo por solo <span>$30</span></p>
                                <a href="" class="btn-large btn-buy-white">Comprar</a>
                                <br>
                                <br>
                                <div class="row card-logos">
                                    <div class="col-3"><img src="<?= get_template_directory_uri() ?>/images/paypal.jpg" alt=""></div>
                                    <div class="col-3"><img src="<?= get_template_directory_uri() ?>/images/master.jpg" alt=""></div>
                                    <div class="col-3"><img src="<?= get_template_directory_uri() ?>/images/visa.jpg" alt=""></div>
                                    <div class="col-3"><img src="<?= get_template_directory_uri() ?>/images/maestro.jpg" alt=""></div>
                                </div>
                            </div>
                            <div class="back-box">
                                <p class="back-btn" white>Regresar al home</p>
                            </div>
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
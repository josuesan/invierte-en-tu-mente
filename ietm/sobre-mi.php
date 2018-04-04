<?php
/* Template Name: Sobre Mi */
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
<body class="sobre-mi">
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
        <div class="row m-0">
            <div class="banner-image" style="background-image: url('<?= get_template_directory_uri() ?>/images/back.png');">
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
                                <ul class="navbar-nav ml-auto aligned mentoria-pag">
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
                                </ul>
                            </div>
                        </nav>
                        <div class="row row-info-contacto">
                            <div class="col-12 col-md-6">
                                <div class="profile">
                                    <img src="<?= get_template_directory_uri() ?>/images/javier.png" alt="" >
                                    <br>
                                    <h3 class="text-center name" extra-bold white>Javier Iglesias</h3>
                                    <br>
                                    <p class="text-center" white>Contador.
                                        Coach motivaciónal.
                                        Coach financiero.
                                        Trader.
                                        Mentor especializado en inversiones.
                                        Bilingüe.
                                        Asesor experto en emprendimiento avanzado.
                                        Ceo y líder  de 2 empresas de educación financiera.
                                        Speaker.
                                        29 años.
                                        Recide en Quito Ecuador.
                                        Vocación: aprender, educar y guiar.
                                        Objetivo personal: crear una gran familia financiera.</p>
                                    <div class="btn-mentoria"><a id="effect-span" href="<?php echo get_permalink( $page_mentoria->ID  ) ?>">Mentoria personalizada </a></div>
                                    
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="contacto">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12 info">
                                                <h3 class="form-title" bold white>Contacto</h3>
                                                <p white><img src="<?= get_template_directory_uri() ?>/images/cell.png" alt=""> +5804168005741</p>
                                                <p white><img src="<?= get_template_directory_uri() ?>/images/email.png" alt=""> Invierteentumente.la@gmail.com</p>
                                            </div>    
                                        </div>
                                    </div>
                                    <div class="form">
                                        <form url="<?php echo admin_url( 'admin-ajax.php' );?>">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <input type="text" name="name" placeholder="Nombre">
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <input type="text" name="mail" placeholder="Correo">
                                                    </div>                                                        
                                                    <div class="col-12">
                                                        <textarea name="details" id="details" placeholder="Mensaje"></textarea>
                                                        <a url="<?php echo admin_url( 'admin-ajax.php' );?>"  class="btn-buy" id="btn-form">Enviar</a> 
                                                    </div>
                                                </div>
                                            </div>   
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Fin Header-->

    <!--Vision-->
    <section class="nosotros" id="nosotros" bg-purple-gradient-lateral>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                            <br>
                            <br>
                        <h1 class="title" extra-bold>Nosotros</h1>
                        <br>
                    </div>
                    <div class="col-12">
                        <div class="col-12 col-md-6 no-pd">
                            <h2 class="subtitle" light>Mision</h2>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta, culpa, quibusdam, illum magni quisquam minus cupiditate aliquid quod possimus veritatis totam odio maxime quas sit obcaecati? Iusto debitis labore voluptatem.</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="col-12 col-md-6 ml-auto no-pd">
                            <h2 class="subtitle" light>Vision</h2>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta, culpa, quibusdam, illum magni quisquam minus cupiditate aliquid quod possimus veritatis totam odio maxime quas sit obcaecati? Iusto debitis labore voluptatem.</p>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--Fin Vision -->

    <!--testimonios-->
    <div class="container-fluid testimonios" id="testimonios">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <br>
                    <br>
                    <h3 class="title" extra-bold purple>Testimonios</h3>
                    <br>
                    <br>
                </div>
                <div class="col-12">
                    <div class="testimonio-area">
                        <div class="bg-faded">
                            <video src="<?= get_template_directory_uri() ?>/images/videos/sobre-mi.mp4" controls></video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Fin testimonios -->
    <?php get_footer( );?>
</body>
</html>
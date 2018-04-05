<?php 
$page_mentoria = get_page_by_path( 'mentoria' );
$page_inicio = get_page_by_path( 'home' );  
$page_sobre_mi = get_page_by_path( 'sobre mi' );  
$page_taller  = get_page_by_path( 'taller' );  
$page_talleres = get_page_by_path( 'talleres' );
 
?>
<!--Footer-->
    <footer style="background-image: url(<?= get_template_directory_uri() ?>/images/footer.jpg);">
        <div class="container-fluid ">
            <div class="row">                       
                <div class="content-footer">
                    <div class="relative">
                        <div class="container container-full-height">
                            <!--RRSS-->
                            <div class="row rrss-box">
                                <div class="col-12 tc-midle">
                                    <h2 class="text-center">Sígueme en las redes</h2>
                                    <div class="list-rrss">
                                        <ul class="navbar-nav navbar-nav-horizontal " >
                                            <li> <a href="https://www.instagram.com/invierteentumente_/" target="_blank"> <i class="fab fa-instagram"></i> </a> </li>
                                            <li> <a href="#" target="_blank"> <i class="fab fa-youtube"></i> </a> </li>
                                            <!--<li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
                                            <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>-->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <hr br-white>
                            <!--MENU FOOTER-->
                            <div class="row menu-footer">
                                <div class="col-12 col-md-4">
                                    <ul class="navbar-nav" >
                                        <li class="list-title"><a href="<?php echo get_permalink( $page_inicio->ID  ) ?>">Invierte en tu mente</a> </li>
                                        <li><a href="<?php echo get_permalink( $page_inicio->ID  ) ?>#seminario">Seminarios</a> </li>
                                        <li><a href="<?php echo get_permalink( $page_mentoria->ID  ) ?>">Mentoria personalizada</a> </li>
                                        <li><a href="<?php echo get_permalink( $page_inicio->ID  ) ?>#taller">Talleres</a></li>
                                        <li><a href="#">Videos</a> </li>
                                        <li><a href="<?php echo get_permalink( $page_sobre_mi->ID  ) ?>#testimonios">Testimonio</a> </li>
                                        <li><a href="<?php echo get_permalink( $page_sobre_mi->ID  ) ?>">Contactanos</a> </li>
                                    </ul>
                                </div>
                                <div class="col-12 col-md-4">
                                    <!--<ul class="navbar-nav" >
                                        <li class="list-title"><a href="">lorem ipsum verlo asfa</a> </li>
                                        <li><a href="">lorem ipsum verlo asfa</a> </li>
                                        <li><a href="">lorem ipsum verlo asfa</a> </li>
                                        <li><a href="">lorem ipsum verlo asfa</a> </li>
                                        <li><a href="">lorem ipsum verlo asfa</a> </li>
                                        <li><a href="">lorem ipsum verlo asfa</a> </li>
                                    </ul>-->
                                </div>
                                <div class="col-12 col-md-4 copyright-cont" style="position:relative;">
                                    <div id="copyright">
                                        <p class="mb-0 text-center" bold>
                                            <img src="<?= get_template_directory_uri() ?>/images/logo-white.png" alt="Invierte en tu mente" class="logo-footer">
                                        </p>
                                        <p class="mb-0" bold>  
                                            Invertir en educación es un seguro contra el fracaso</p>
                                        <br>
                                        <p class="mb-0">Copyright © Todos los derechos reservados</p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Fin Footer-->
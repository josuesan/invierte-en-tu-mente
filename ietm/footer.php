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
                                    <h2 class="text-center">Sigueme en las redes</h2>
                                    <div class="list-rrss">
                                        <ul class="navbar-nav navbar-nav-horizontal " >
                                            <li> <a href="#"> <i class="fab fa-instagram"></i> </a> </li>
                                            <li> <a href="#"> <i class="fab fa-youtube"></i> </a> </li>
                                            <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
                                            <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
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
                                        <li><a href="<?php echo get_permalink( $page_mentoria->ID  ) ?>">Mentoria especializada</a> </li>
                                        <li><a href="<?php echo get_permalink( $page_sobre_mi->ID  ) ?>#nosotros">Nosotros</a> </li>
                                        <li><a href="#">Youtube</a> </li>
                                        <li><a href="<?php echo get_permalink( $page_mentoria->ID  ) ?>#testimonios">Testimonio</a> </li>
                                        <li><a href="<?php echo get_permalink( $page_mentoria->ID  ) ?>">Contacto</a> </li>
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
                                        <p class="mb-0">Invierte en tu mente</p>
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
    <footer>
        <div class="footer-content container vertpadding">
            <div class="row">
                
                <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Uno') ) : endif; ?> 
				<div class="col-md-3">
                    <h4 class="uppercase white">MENÚ</h4>
                    <?php wp_nav_menu(array('container' => 'false', 'theme_location' =>'footer-menu', 'menu_class' => 'plain-list', 'link_before' => '- ')); ?>
                </div>
                <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Tres') ) : endif; ?> 
                <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Cuatro') ) : endif; ?> 
            </div>
            </div>
        </div>
        <?php wp_footer(); ?>
        <div class="footer-rights">
            <p>Todos los derechos reservados RIGBA PROMO SOLUTIONS 2015 | Design by: <a href="http://mixen.mx"><img src="http://mixen.mx/firma/logo-mixen.png" alt="Agencia Mixen" /> mixen.mx</a></p>
        </div>
    </footer>
    
    
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/materialize.min.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/app.js"></script>
  </body>
</html>
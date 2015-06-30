<?php get_header(); ?>
<!-- BEGIN FIXED-BG -->
<div class="fixed-bg-product"></div>
<!-- END FIXED-BG -->
<div class="container vertpadding-medium">
    <div class="row">
        <div class="col-xs-9 col-md-10">
            <div id="products">
               <div class="products-header">
                   <h3>Productos</h3>
               </div>
               <div id="product">
                   <div class="row">
                       <div class="col-md-6">
                           <img src="<?php bloginfo('template_url') ?>/img/content/products/1.png" alt="Plumas">
                       </div>
                       <div class="col-md-6">
                           <div class="product-info">
                               <h3 class="product-highlight">Plumas</h3>
                               <p>Código de Producto: 5522s</p>
                               <p>En Existencia</p>
                               <div class="colors">
                                   <p>Colores</p>
                                   <img src="<?php bloginfo('template_url') ?>/img/content/products/colors/1.png" alt="Azul">
                                   <img src="<?php bloginfo('template_url') ?>/img/content/products/colors/2.png" alt="Verde">
                                   <img src="<?php bloginfo('template_url') ?>/img/content/products/colors/3.png" alt="Verde Oscuro">
                                   <img src="<?php bloginfo('template_url') ?>/img/content/products/colors/4.png" alt="Rojo">
                               </div>
                               <h3 class="product-highlight">$50</h3>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="products-header">
                   <h3>Productos Relacionados</h3>
               </div>
               <div class="row">
                   <div class="col-sm-6 col-md-3">
                       <div class="product">
                           <img src="<?php bloginfo('template_url') ?>/img/content/products/pencils.png" alt="Plumas">
                           <p>Plumas</p>
                           <div class="center-block">
                               <a href="#" class="btn orange-btn">Ver Producto</a>
                           </div>
                       </div>
                   </div>
                   <div class="col-sm-6 col-md-3">
                       <div class="product">
                           <img src="<?php bloginfo('template_url') ?>/img/content/products/termos.png" alt="Termos">
                           <p>Termos</p>
                           <div class="center-block">
                               <a href="#" class="btn orange-btn">Ver Producto</a>
                           </div>
                       </div>
                   </div>
                   <div class="col-sm-6 col-md-3">
                       <div class="product">
                           <img src="<?php bloginfo('template_url') ?>/img/content/products/umbrella.png" alt="Sombrilla">
                           <p>Sombrilla</p>
                           <div class="center-block">
                               <a href="#" class="btn orange-btn">Ver Producto</a>
                           </div>
                       </div>
                   </div>
                   <div class="col-sm-6 col-md-3">
                       <div class="product">
                           <img src="<?php bloginfo('template_url') ?>/img/content/products/cups.png" alt="Tazas">
                           <p>Tazas</p>
                           <div class="center-block">
                               <a href="#" class="btn orange-btn">Ver Producto</a>
                           </div>
                       </div>
                   </div>
               </div>               
            </div>
        </div>
        <div class="col-xs-3 col-md-2">
           	<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Categorias') ) : endif; ?> 
        </div>
    </div>
</div>
<?php get_footer(); ?>
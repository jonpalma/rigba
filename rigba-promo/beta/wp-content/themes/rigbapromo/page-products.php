<?php get_header(); ?>

<div class="container vertpadding-medium">
    <div class="row">
        <div class="col-sm-3 col-md-2">
			<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Categorias') ) : endif; ?> 
		</div>
        <div class="col-sm-9 col-md-10">
            <div id="products">
               <div class="products-header">
                   <h3>Productos</h3>
               </div>
               <div class="row">
                   <div class="col-sm-6 col-md-3">
                       <div class="product">
                           <img src="<?php bloginfo('template_url')?>/img/content/products/pencils.png" alt="Plumas">
                           <p>Plumas</p>
                           <div class="center-block">
                               <a href="?page_id=80" class="btn orange-btn">Ver Producto</a>
                           </div>
                       </div>
                   </div>
                   <div class="col-sm-6 col-md-3">
                       <div class="product">
                           <img src="<?php bloginfo('template_url')?>/img/content/products/termos.png" alt="Termos">
                           <p>Termos</p>
                           <div class="center-block">
                               <a href="?page_id=80" class="btn orange-btn">Ver Producto</a>
                           </div>
                       </div>
                   </div>
                   <div class="col-sm-6 col-md-3">
                       <div class="product">
                           <img src="<?php bloginfo('template_url')?>/img/content/products/umbrella.png" alt="Sombrilla">
                           <p>Sombrilla</p>
                           <div class="center-block">
                               <a href="?page_id=80" class="btn orange-btn">Ver Producto</a>
                           </div>
                       </div>
                   </div>
                   <div class="col-sm-6 col-md-3">
                       <div class="product">
                           <img src="<?php bloginfo('template_url')?>/img/content/products/cups.png" alt="Tazas">
                           <p>Tazas</p>
                           <div class="center-block">
                               <a href="?page_id=80" class="btn orange-btn">Ver Producto</a>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="row">
                   <div class="col-sm-6 col-md-3">
                       <div class="product">
                           <img src="<?php bloginfo('template_url')?>/img/content/products/pencils.png" alt="Plumas">
                           <p>Plumas</p>
                           <div class="center-block">
                               <a href="?page_id=80" class="btn orange-btn">Ver Producto</a>
                           </div>
                       </div>
                   </div>
                   <div class="col-sm-6 col-md-3">
                       <div class="product">
                           <img src="<?php bloginfo('template_url')?>/img/content/products/termos.png" alt="Termos">
                           <p>Termos</p>
                           <div class="center-block">
                               <a href="?page_id=80" class="btn orange-btn">Ver Producto</a>
                           </div>
                       </div>
                   </div>
                   <div class="col-sm-6 col-md-3">
                       <div class="product">
                           <img src="<?php bloginfo('template_url')?>/img/content/products/umbrella.png" alt="Sombrilla">
                           <p>Sombrilla</p>
                           <div class="center-block">
                               <a href="?page_id=80" class="btn orange-btn">Ver Producto</a>
                           </div>
                       </div>
                   </div>
                   <div class="col-sm-6 col-md-3">
                       <div class="product">
                           <img src="<?php bloginfo('template_url')?>/img/content/products/cups.png" alt="Tazas">
                           <p>Tazas</p>
                           <div class="center-block">
                               <a href="?page_id=80" class="btn orange-btn">Ver Producto</a>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="row">
                   <div class="col-sm-6 col-md-3">
                       <div class="product">
                           <img src="<?php bloginfo('template_url')?>/img/content/products/pencils.png" alt="Plumas">
                           <p>Plumas</p>
                           <div class="center-block">
                               <a href="?page_id=80" class="btn orange-btn">Ver Producto</a>
                           </div>
                       </div>
                   </div>
                   <div class="col-sm-6 col-md-3">
                       <div class="product">
                           <img src="<?php bloginfo('template_url')?>/img/content/products/termos.png" alt="Termos">
                           <p>Termos</p>
                           <div class="center-block">
                               <a href="?page_id=80" class="btn orange-btn">Ver Producto</a>
                           </div>
                       </div>
                   </div>
                   <div class="col-sm-6 col-md-3">
                       <div class="product">
                           <img src="<?php bloginfo('template_url')?>/img/content/products/umbrella.png" alt="Sombrilla">
                           <p>Sombrilla</p>
                           <div class="center-block">
                               <a href="?page_id=80" class="btn orange-btn">Ver Producto</a>
                           </div>
                       </div>
                   </div>
                   <div class="col-sm-6 col-md-3">
                       <div class="product">
                           <img src="<?php bloginfo('template_url')?>/img/content/products/cups.png" alt="Tazas">
                           <p>Tazas</p>
                           <div class="center-block">
                               <a href="?page_id=80" class="btn orange-btn">Ver Producto</a>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="row pages">
                   <div class="col-sm-6"><p>MOSTRANDO 1-16 DE 80 RESULTADOS</p></div>
                   <div class="col-sm-6">
                       <ul class="inline-list">
                           <li class="active-page"><a href="#">1</a></li>
                           <li><a href="#">2</a></li>
                           <li><a href="#">3</a></li>
                           <li><a href="#">4</a></li>
                           <li><a href="#">5</a></li>
                           <li class="next-page"><a href="#"></a></li>
                       </ul>
                   </div>
               </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
<?php get_header(); ?>

<div class="fixed-bg-generic" style="background: url(<?php echo CFS()->get('backgroundimage'); ?>) no-repeat center center fixed;"></div>

<div id="catalog">
	<div class="container">
	<div class="vertmargin-medium">
		<h1 class="opensans bold"><?php echo CFS()->get('catalog_header'); ?></h1>
		<div class="small-border center-block"></div>
	</div>
	<?php $catalogArray = CFS()->get('catalog_array'); ?>
	<?php $arraySize = count($catalogArray) ?>
	<?php for($i = 0; $i < $arraySize; $i++) { ?>
		<?php if($i % 3 == 0) {echo "<div class='row vertmargin'>";} ?>
		<div class="col-sm-4">
			<a href="<?php echo $catalogArray[$i]['catalog_link']; ?>"><div class="hover-overlay"><img src="<?php echo $catalogArray[$i]['catalog_image']; ?>" class="img-responsive"></div></a>
			<p class="vertmargin-tiny bold pink-purple"><?php echo $catalogArray[$i]['catalog_title']; ?></p>
			<div class="center-block slight-border"></div>
			<p><?php echo $catalogArray[$i]['catalog_description']; ?><br><span class="pink-purple">Categoría:</span> <i><?php echo $catalogArray[$i]['catalog_category']; ?></i></p>
		</div>			
		<?php if($i % 3 == 2 || ($i + 1) == $arraySize) {echo "</div>";} ?>
	<?php } ?>
		
		<!-- <div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
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
			<div class="col-md-2"></div>
		</div>-->
	</div>
</div>
<br class="vertmargin">

<?php get_footer(); ?>
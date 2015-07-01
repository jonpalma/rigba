<?php get_header(); ?>
<!-- BEGIN SLIDER -->
<div class="container-fluid">
    <div class="row">
       	<?php if( function_exists('cyclone_slider') ) cyclone_slider('index-slideshow'); ?>
    </div>
</div>
<!-- END SLIDER -->
<!-- BEGIN OURBRANDS -->
<div class="container vertmargin">
	<h2 class="dark-gray uppercase"><?php echo CFS()->get('brands_header'); ?></h2>
 	<div class="row vertmargin-big">
    	<?php $brandsArray = CFS()->get('brands_array'); ?>	       
		<?php foreach($brandsArray as $brand) { ?>
			<div class="col-sm-6 col-lg-3">
				<div class="ourbrands">
					<img src="<?php echo $brand['brand_image'] ?>" alt="<?php echo $brand['brand_name'] ?>">
					<p><?php echo $brand['brand_name'] ?></p>
				</div>
			</div>
		<?php } ?>      
    </div>
</div>
<!-- END OURBRANDS -->
<!-- BEGIN PARALLAX-PROMO -->
<div class="parallax-container">
    <div class="parallax">
        <img src="<?php echo CFS()->get('first_parallax_background'); ?>" alt="">
    </div>
    <div class="container vertpadding-huge">
        <h1 class="white uppercase"><?php echo CFS()->get('first_parallax_h1'); ?></h1>
        <h3 class="white uppercase"><?php echo CFS()->get('first_parallax_h3'); ?></h3>
        <br class="vertmargin-tiny">
		<?php if(strlen(CFS()->get('first_parallax_h1')) > 1) { ?>
			<div class="center-block">
				<a class="btn white-btn" href="?page_id=114"><?php echo CFS()->get('first_parallax_button'); ?></a>
			</div>
		<?php } ?>
    </div>
</div>
<!-- END PARALLAX -->
<!-- BEGIN ABOUTUS -->
<div class="container">
    <h2 class="red-orange uppercase vertmargin-big"><?php echo CFS()->get('about_us_header'); ?></h2>
    <p class="negativemargin big"><?php echo CFS()->get('about_us_text'); ?></p>
    <div class="row vertmargin-big">
        <div class="col-md-6">
            <div class="aboutus-wrapper">
                <img src="<?php echo CFS()->get('mision_image'); ?>" alt="Misión" class="inline">
                <div class="aboutus">
                    <h4 class="red-orange nomargin">MISIÓN</h4>
                    <p><?php echo CFS()->get('mision_text'); ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="aboutus-wrapper">
                <img src="<?php echo CFS()->get('vision_image'); ?>" alt="Visión">
                <div class="aboutus">
                    <h4 class="red-orange nomargin">VISIÓN</h4>
                    <p><?php echo CFS()->get('vision_text'); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END ABOUTUS -->
<!-- BEGIN PARALLAX-BRANCHES -->
<div class="parallax-container">
    <div class="parallax">
        <img src="<?php echo CFS()->get('branches_parallax'); ?>" alt="">
    </div>
    <div class="container-fluid vertpadding-big">
		<h1 class="white"><?php echo CFS()->get('branches_heading'); ?></h1>
        <div class="center-block">
        	<?php $branchesArray = CFS()->get('branches_array'); ?>
			<?php foreach($branchesArray as $branch) { ?>
            	<div class="branch-states-index">
            	   	<a href="?page_id=112">
                   		<img src="<?php echo $branch['branch_image'] ?>" alt="<?php echo $branch['branch_text'] ?>">
                   		<p class="white uppercase"><?php echo $branch['branch_text'] ?></p>
                	</a>
            	</div>
			<?php } ?>
        </div>
    </div>
</div>
<!-- END PARALLAX -->
<!-- BEGIN HELP -->
<div class="container vertpadding-big">
    <div class="row">
        <h3 class="lake-blue uppercase"><?php echo CFS()->get('help_heading'); ?></h3>
        <p class="small lime-green vertmargin-tiny"><?php echo CFS()->get('help_text'); ?></p>
        <div class="center-block vertmargin-small">
            <a href="?page_id=111/" class="btn blue-btn huge"><?php echo CFS()->get('help_button'); ?></a>
        </div>
    </div>
</div>
<!-- END HELP -->
<?php get_footer(); ?>
<?php get_header(); ?>

<div class="fixed-bg-generic" style="background: url(<?php echo CFS()->get('backgroundimage'); ?>) no-repeat center center fixed;"></div>

<!-- BEGIN CONTACT STATES -->
<div class="container vertmargin-medium">
    <h1 class="opensans bold"><?php echo CFS()->get('contact-states-header');?></h1>
    <h3 class="opensans"><?php echo CFS()->get('contact-states-subheader');?></h3>
    <div class="contact-states vertmargin-big center-block">
		<?php $statesArray = CFS()->get('contactstates'); ?>
		<?php if(count($statesArray) > 0) { foreach($statesArray as $state) { ?>
			<div class="contact-info">
				<img class="img-responsive" src="<?php echo $state['stateimg']; ?>">
				<?php $branchesArray = $state['branches']; ?>
				<?php if(count($branchesArray) > 0) { foreach($branchesArray as $branch) { ?>
					<p>
						<span class="bright-orange"><?php echo $branch['name']; ?></span>
						<br>
						<?php echo $branch['phone']; ?>
						<br>
						<?php echo $branch['data']; ?>
					</p>	
				<?php } } ?>
			</div>
		<?php } } ?>          
    </div>
</div>
<!-- END CONTACT STATES -->
<!-- BEGIN CONTACT FORM -->
<div class="contact-form">
    <div class="container vertpadding">
        <div class="row">
            <div class="col-sm-4 col-lg-3 left-align">
                <h1 class="opensans white bold uppercase"><?php echo CFS()->get('contact-header');?></h1>
                <h2 class="white bold opensans vertmargin"><?php echo CFS()->get('contact-subheader');?></h2>
                <p class="bold white">Envíanos un correo a:</p>
                <p class="white"><?php echo CFS()->get('contact-emails');?></p>
                <br>
                <p class="bold white">Llámanos al:</p>
                <p class="white"><?php echo CFS()->get('contact-phones');?></p>                
            </div>
            <div class="col-sm-8 col-lg-9">
                <?php echo do_shortcode( '[contact-form-7 id="161" title="Contacto Form"]' ); ?>
            </div>
        </div>
    </div>
</div>
<!-- END CONTACT FORM -->
<!-- BEGIN OUR WEBSITES -->
<div id="ourwebsites" class="vertpadding-medium">
	<div class="container">
		<h1 class="opensans bold"><?php echo CFS()->get('our-websites-header');?></h1>
		<h3 class="opensans"><?php echo CFS()->get('our-websites-subheader');?></h3>
		<div class="our-sites-wrapper">
			<?php $sites = CFS()->get('our_sites') ?>
			<?php for($i = 0; $i < count($sites); $i++) { ?>
				<a href="#<?php echo $sites[$i]['site_link']; ?>">
					<img class="our-sites" src="<?php echo $sites[$i]['site_image']; ?>" alt="<?php echo $sites[$i]['site_link']; ?>">
				</a>						
			<?php } ?>
		</div>
		
	</div>
</div>
<!-- END OUR WEBSITES -->

<?php get_footer(); ?>
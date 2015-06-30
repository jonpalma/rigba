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
                <form action="" class="vertpadding">
                    <div class="row vertmargin">
                        <div class="col-md-6">
                            <label for="name">Nombre</label>
                            <input type="text" id=name>
                        </div>
                        <div class="col-md-6">
                            <label for="email">Email</label>
                            <input type="email" id="email">
                        </div>
                    </div>
                    <div class="row vertmargin">
                        <div class="col-md-6">
                            <label for="phone">Teléfono</label>
                            <input type="text" id="phone">
                            <div class="vertmargin"></div>
                            <label for="business">Nombre de la empresa</label>
                            <input type="text" id="business">
                        </div>
                        <div class="col-md-6">
                            <label for="help">¿Cómo podemos ayudarte?</label>
                            <textarea id="help" rows="5" cols="55"></textarea>
                        </div>
                    </div>
                    <button class="btn green-btn pull-right">Enviar</button>
                </form>
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
		<div class="row vertmargin">
			<div class="col-sm-4">
				<img class="vertmargin img-responsive center-block" src="<?php echo CFS()->get('our-websites-firstimage'); ?>">
			</div>
			<div class="col-sm-4">
				<img class="vertmargin img-responsive center-block" src="<?php echo CFS()->get('our-websites-secondimage'); ?>">
			</div>
			<div class="col-sm-4">
				<img class="vertmargin img-responsive center-block" src="<?php echo CFS()->get('our-websites-thirdimage'); ?>">
			</div>
		</div>
	</div>
</div>
<!-- END OUR WEBSITES -->

<?php get_footer(); ?>
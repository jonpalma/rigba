<?php get_header(); ?>
<?php $mainloop = CFS()->get('branches_state_loop');?>

<div class="fixed-bg-generic" style="background: url(<?php echo CFS()->get('backgroundimage'); ?>) no-repeat center center fixed;"></div>

<div id="branches">
	<div class="container">
		<div class="vertmargin-big">
			<h1 class="opensans bold"><?php echo CFS()->get('branches-header'); ?></h1>
			<h3 class="opensans"><?php echo CFS()->get('branches-subheader'); ?></h3>
		</div>
		<div class="row negativemargin">
			<div class="col-sm-3">
				<h2 class="red-orange opensans bold left-align">Selecciona una Sucursal</h2>
				<!-- BEGIN CONTROLS -->
					<div class="center-block nav nav-tabs branchescontrol">
						<?php for($i = 0; $i < count($mainloop); $i++) { ?>
							<a href="#<?php echo str_replace(' ', '-', $mainloop[$i]['state_name']); ?>" role="tab" data-toggle="tab">
								<div class="branch-states <?php echo ($i == 0)? 'active':''; ?>">
									<div>
										<img src="<?php echo $mainloop[$i]['state_image']; ?>" alt="<?php echo $mainloop[$i]['state_name']; ?>">
									</div>
									<p class="white uppercase"><?php echo $mainloop[$i]['state_name']; ?></p>
								</div>
							</a>						
						<?php } ?>
					</div>
				<!-- END CONTROLS -->
			</div>
			<div class="col-sm-9">
				<!-- BEGIN SUCURSALES MAPS -->
				<div class="tab-content">
					<?php for($i = 0; $i < count($mainloop); $i++) { ?>
						<div role="tabpanel" class="tab-pane fade in <?php echo ($i == 0)? 'active':''; ?> " id="<?php echo str_replace(' ', '-', $mainloop[$i]['state_name']); ?>">
							<div class="map">
								<iframe width='100%' height='557px' frameBorder='0' src='<?php echo $mainloop[$i]['map']; ?>'></iframe>
							</div>
							<div class="row">
								<?php for($x = 0; $x < count($mainloop[$i]['branch_loop']); $x++) { ?>
									<div class="col-sm-4 map-data">
										<strong><span class="orange"><?php echo $mainloop[$i]['branch_loop'][$x]['branch_name'] ?></span></strong>
										<?php echo $mainloop[$i]['branch_loop'][$x]['branch_info'] ?>
									</div>								
								<?php } ?>
							</div>
						</div>
					<?php } ?>					
				</div>
				<!-- END SUCURSALES MAP -->		
			</div>
		</div>
	</div>
</div>
<br class="vertmargin">

<?php get_footer(); ?>
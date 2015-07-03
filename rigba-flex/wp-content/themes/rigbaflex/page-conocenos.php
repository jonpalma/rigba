<?php get_header(); ?>

<!-- BEGIN ABOUTUS -->
<div class="container vertpadding-big">
    <h2 class="blue uppercase"><?php echo CFS()->get('about_us_header'); ?></h2>
    <p class="vertmargin big"><?php echo CFS()->get('about_us_text'); ?></p>
    <div class="row vertmargin-big">
        <div class="col-lg-6">
            <div class="aboutus-wrapper">
                <img src="<?php echo CFS()->get('mision_image'); ?>" alt="Misión" class="inline">
                <div class="aboutus">
                    <h4 class="blue nomargin">MISIÓN</h4>
                    <p><?php echo CFS()->get('mision_text'); ?></p>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="aboutus-wrapper">
                <img src="<?php echo CFS()->get('vision_image'); ?>" alt="Visión">
                <div class="aboutus">
                    <h4 class="blue nomargin">VISIÓN</h4>
                    <p><?php echo CFS()->get('vision_text'); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END ABOUTUS -->

<?php get_footer(); ?>
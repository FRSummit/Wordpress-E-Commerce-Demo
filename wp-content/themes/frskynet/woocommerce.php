<?php get_header();?>

<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="#">Home</a></li>
				<li class='active'>Blog</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="row">
			<div class="blog-page">
				<div class="col-md-9">



				<?php woocommerce_content(); ?>

</div>

        <!-- RIGHT SIDEBAR -->
        <?php get_template_part('right-sidebar'); ?>
        <!-- RIGHT SIDEBAR -->
				
			</div>
		</div>
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
<div id="brands-carousel" class="logo-slider wow fadeInUp">

		<div class="logo-slider-inner">	
			<div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
				<div class="item m-t-15">
					<a href="#" class="image">
						<img data-echo="<?php echo get_template_directory_uri(); ?>/assets/images/brands/brand1.png" src="<?php echo get_template_directory_uri(); ?>/assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item m-t-10">
					<a href="#" class="image">
						<img data-echo="<?php echo get_template_directory_uri(); ?>/assets/images/brands/brand2.png" src="<?php echo get_template_directory_uri(); ?>/assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="<?php echo get_template_directory_uri(); ?>/assets/images/brands/brand3.png" src="<?php echo get_template_directory_uri(); ?>/assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="<?php echo get_template_directory_uri(); ?>/assets/images/brands/brand4.png" src="<?php echo get_template_directory_uri(); ?>/assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="<?php echo get_template_directory_uri(); ?>/assets/images/brands/brand5.png" src="<?php echo get_template_directory_uri(); ?>/assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="<?php echo get_template_directory_uri(); ?>/assets/images/brands/brand6.png" src="<?php echo get_template_directory_uri(); ?>/assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="<?php echo get_template_directory_uri(); ?>/assets/images/brands/brand2.png" src="<?php echo get_template_directory_uri(); ?>/assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="<?php echo get_template_directory_uri(); ?>/assets/images/brands/brand4.png" src="<?php echo get_template_directory_uri(); ?>/assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="<?php echo get_template_directory_uri(); ?>/assets/images/brands/brand1.png" src="<?php echo get_template_directory_uri(); ?>/assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="<?php echo get_template_directory_uri(); ?>/assets/images/brands/brand5.png" src="<?php echo get_template_directory_uri(); ?>/assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->
		    </div><!-- /.owl-carousel #logo-slider -->
		</div><!-- /.logo-slider-inner -->
	
</div><!-- /.logo-slider -->
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div>
</div>


<?php get_footer();?>
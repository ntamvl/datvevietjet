	<div class="row">
		<div class="col-sm-12 col-md-12 hotline">
			<h2>Hotline đặt vé máy bay giá rẻ </h2>
			<p><strong class="highlight">(08) 730-50-500</strong> <br> <strong>(08) 730-50-181, (08) 730-50-182, (08) 730-50-183</strong><br>
			Di Động: <strong class="highlight">0902 98 53 55</strong></p>
		</div>
	</div>

	<!-- <div class="social">
		<a href=""><i class="fa fa-facebook fa-2x"></i></a>
		<a href=""><i class="fa fa-twitter fa-2x"></i></a>
		<a href=""><i class="fa fa-pinterest fa-2x"></i></a>
		<a href=""><i class="fa fa-instagram fa-2x"></i></a>
		<a href=""><i class="fa fa-linkedin fa-2x"></i></a>
		<a href=""><i class="fa fa-youtube fa-2x"></i></a>
	</div> -->

	<?php if (!is_home()) { ?>
	<div style="clear: both;"></div>
	<div class="col-sm-12 col-md-12 bordered">
		<?php get_template_part( 'search-box-sidebar' ); ?>
		<br/>
  </div>
  <?php } ?>

	<?php
	if (!is_home()) {
		get_template_part( '_sidebar_tabs' );
	}
	?>

	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Primary Sidebar') ) : ?>

	<?php endif; ?>
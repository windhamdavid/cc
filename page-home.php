<?php 
/*
Template Name: Home
*/

get_header(); ?>

<div class="container-full leader">
	<div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		</ol>

		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<img class='img-responsive col-xs-12' src="<?php bloginfo('template_directory'); ?>/img/slide1.png" alt="">
					<div class="carousel-caption"></div>
				</div>
			</div>
			<div class="item">
				<div class="container">
					<img class='img-responsive col-xs-12' src="<?php bloginfo('template_directory'); ?>/img/slide2.png" alt="">
					<div class="carousel-caption"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="main-container" class="container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); the_content(); endwhile;?>

		</main>
	</div>
</div>
<?php get_footer(); ?>
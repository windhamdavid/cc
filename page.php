<?php get_header(); ?>
<div id="main-container" class="container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); the_content(); endwhile;?>

		</main>
	</div>
</div>
<?php get_footer(); ?>

<?php get_header(); ?>

	<div class="container">
		<div id="content" role="main">
			<main id="main" class="site-main" role="main">
			<?php query_posts('showposts=10'); ?>
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<article id="content" class="single" role="main">
				<div itemscope="" itemtype="http://schema.org/BlogPosting" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
						<div class="date">
							<time class="updated" datetime="<?php the_time('c');?>" itemprop="datePublished"><?php the_date('n/j/Y'); ?></time>		
						</div>
						<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( '%s', 'daw' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
						<?php the_content(); ?>
						<div class="clear">&nbsp;</div>
					</div>
				</div>
			</article>
			<?php endwhile; ?>
			</main>
		</div>
	</div>
	
<?php get_footer(); ?>
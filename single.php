<?php get_header(); ?>

	<div class="container">
		<article id="content" class="single" role="main">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div itemscope="" itemtype="http://schema.org/BlogPosting" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="entry-content">
					<div class="date">
						<time class="updated" datetime="<?php the_time('c');?>" itemprop="datePublished"><?php the_time('n/j/Y'); ?></time>
					</div>			
						<?php $img_url = wp_get_attachment_image_src(get_post_thumbnail_id(),'thumbnail'); ?>
						<img itemprop="image" src="<?php echo $img_url[0];?>" alt="thumbnail" style="display:none"/>
					<h2 itemprop="name headline" class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'daw' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<?php the_content(); ?>
					<div class="clear">&nbsp;</div>
					<div id="nav-below" class="navigation">
						<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'daw' ) . '</span> %title' ); ?></div>
						<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'daw' ) . '</span>' ); ?></div>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
		</article>
	</div>
	
<?php get_footer(); ?>
<?php 
/*
Template Name: About
*/

get_header(); ?>

<div id="main-container" class="container">
	<div class="row">
		<div class="col-sm-8">
			<h4>About Us</h4>
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
					<?php while ( have_posts() ) : the_post(); the_content(); endwhile;?>
				</main>
			</div><br />
			<h4>Our Team</h4>
		</div>
		<div class="col-sm-4">
			<h4>Associations</h4>
			<a href="<?php echo home_url( '/' ); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/trane-comfort.png" width="300" alt="Trane Comfort Specialist"></a>
			<h5>Trane Comfort Specialist</h5>
			<p>The Trane Comfort Specialist designation means a dealer has met Trane's stringent standards and is committed to being the best in every aspect of his or her business: installation, service, employee training and customer satisfaction.</p>
			<a target="_blank" href="http://www.bbb.org/upstatesc/business-reviews/heating-and-air-conditioning/climate-control-systems-of-greenwood-inc-in-greenwood-sc-15002405/"><img src="<?php bloginfo('template_directory'); ?>/img/bbb_accredited.png" alt="BBB Business Review"></a>
			<h5>Better Business Bureau A+ Rating</h5>
			<p>A BBB Accredited Business since 10/27/2006</p><br />
			<a target="_blank" href="http://www.greenwoodscchamber.org/list/member/climate-control-systems-of-greenwood-inc-777"><img src="<?php bloginfo('template_directory'); ?>/img/Greenwood-Chamber.png" alt="Greenwood Chamber of Commerce" width="200"></a>
			<h5>Greenwood Chamber of Commerce</h5>
			<p>Climate Control Systems of Greenwood is a member of the Greenwood Chamber of Commerce</p>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-8">
			<h4>Testimonials</h4>
			<p><em>“The guys just left a few minutes ago and my husband said they were absolutely great! He commented on their professionalism and attention to detail. Great Crew! There were several options in Greenwood for purchasing a Trane but I am really glad that we opted to go with you guys. If today is any indication, we will not be disappointed with the service! We will definitely recommend Climate Control!”</em></p>
			<p><em>“Thank you so much for the great service.  The team sent out to our home was very efficient and professional.  Ivan, Mark and the rest of the team were great to work with.”</em></p>
			<p><em>“A very professional and knowledgeable company.”</em></p>
			<p><em>“Climate Control Systems installed my heat and A/C unit.  The unit they installed has given good service and they have always given good prompt service when called.”</em></p>
			<p><em>“We have always been pleased with Climate Control.  They were quick to follow up problem calls with their professional, friendly and courteous staff.”</em></p>
			<p><em>“The young man that came to my home for a seasonal check was very polite – he answered all my questions and offered advice on a part that could present problems in hot weather. He gave the price of the part – he was very kind to an 80-plus year old customer.”</em></p>
			<p><em>“My experience with Climate Control has been positive from the first to the most recent contact.”</em></p>
			<p><em>“Thank you so much.  It makes me feel good to know you do business in such a reputable way.”</em></p>
			<p><em>“Climate Control is always top notch! They are always able to fix any problem quickly and with great attention to detail!”</em></p>
			<p><em>“Too often we are quick to criticize and slow to praise.  Since we have been with Climate Control, we have been completely satisfied with the service and we thank you and your staff. There are times when someone is due extra special recognition. Monday night with the temperature in the teens and with terrible wind, Ivan Yandell came to put a new defrost panel on our heating unit. We are truly grateful for his kindness and concern for these old people. We thought you should know this.”</em></p>
		</div>
		<div class="col-sm-4">

		</div>
	</div>	
</div>
<?php get_footer(); ?>
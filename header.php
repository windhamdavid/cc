<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>

<body>

<header id="masthead" class="site-header container-fluid" role="banner">
	<div class="container site-branding">
		<a href="<?php echo home_url( '/' ); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/climatecontrol-new.png" width="300" alt="Climate Control Systems of Greenwood"></a>
		<div class="call-to-action right">
			<h3 class="work-sans">864-229-1409</h2>
			<div class="btn-group">
			  <button type="button" class="btn btn-call dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  Service Request 
				  <span class="caret"></span>
			  	<span class="sr-only">Toggle Dropdown</span>
			  </button>
			  <ul class="dropdown-menu">
			    <li><a href="service">Service Request</a></li>
			    <li><a href="estimate">Estimate Request</a></li>
			    <li><a href="survey">Survey</a></li>
			    <li><a href="contact">Contact</a></li>
			  </ul>
			</div>
		</div>
	
	</div>

	<nav class="container navbar navbar-default navbar-inverse" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
		<div class="collapse navbar-collapse">
			<?php wp_nav_menu( array(
			        'menu'              => 'primary',
			        'theme_location'    => 'primary',
			        'depth'             => 3,
			        'container'         => false,
			        'menu_class'        => 'nav navbar-nav',
			        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			        'walker'            => new wp_bootstrap_navwalker())
			    );
			?>
		</div>
	</nav>
</header>



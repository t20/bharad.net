<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<div id="home_wrapper">

  <div id="headshot">
  </div>
				<?php if (get_option('sf_slogan_status')) { ?>
				<div class="slogan">
					<h2><?php echo stripslashes(get_option('sf_slogan_header')); ?></h2>
					<p><?php echo stripslashes(get_option('sf_slogan_text')); ?></p>
					<p>
					   <ul id="nav">
					       <li class=""><a href="/resume">View Resume</a></li>
					       <li class=""><a href="/projects">View Projects</a></li>
					       <li class=""><a href="/contact">Contact Me</a></li>
					   </ul>
					</p>
				</div>
				<?php } ?>
		<div class="clear"></div>
</div>
				<div class="home_widgets">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Home Widget') ) : ?>
					<?php endif; ?>
				</div>

<?php get_footer(); ?>

			<?php get_header(); ?>
        <div id="meetup_intro" style="margin-bottom:20px">
          <?php echo stripslashes(get_option('sf_social_text')); ?>
        </div>
				<div class="content">
				<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					
					<div class="blogpost meetups">
						<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						<div class="entry">
							<?php the_content('Continue Reading &raquo;'); ?>
						</div>
					</div>
					
				<?php endwhile; ?>
					
					<?php 
					if(function_exists('wp_pagenavi')):
                        wp_pagenavi();
					else:
					?>
					<div class="navigation">
						<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
						<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
					</div>
					<?php endif; ?>
					
				<?php else : ?>
					<?php include_once(TEMPLATEPATH."/page-error.php"); ?>
				<?php endif; ?>
				
				</div>
				
			<?php
			  echo "<div class='sidebar'>";
        if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Meetups Widget') ) :
        endif;
        echo "</div>";
			?>
			<?php get_footer(); ?>

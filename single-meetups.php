<?php get_header(); ?>

				<div class="content">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php 
						$category = sf_get_category_id(get_option('sf_portfolio_category'));
						if (in_category($category) || post_is_in_descendant_category($category)) { include(TEMPLATEPATH . "/template-portfolioitem.php"); $footer = "no"; }
						else {
					?>
					<div class="blogpost">
						<div class="comments"><?php comments_number('0', '1', '%'); ?></div>
						<h2 class="title"><?php the_title(); ?></h2>
						<div class="entry">
							<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
							<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
						</div>
					</div>
					<?php } ?>
					<?php endwhile; else: ?>
					
							<?php include_once(TEMPLATEPATH."/page-error.php"); ?>
					
					<?php endif; ?>

				</div>

<?php if ($footer != "no") { 
  echo "<div class='sidebar'>";
  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Meetup Widget') ) :
  endif;
  echo "</div>";
  } ?>
<?php get_footer(); ?>

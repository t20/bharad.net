				<div class="content fullwidth">
				    <?php if (get_option('sf_portfolio_header') && get_option('sf_portfolio_text')) { ?>
					<?php } ?>
					<?php 
						$category = sf_get_category_id(get_option('sf_portfolio_category'));
						$categories = get_categories('child_of='.$category);
						$ppp = (get_option('sf_portfolio_pagination')) ? get_option('sf_portfolio_pagination') : 6;
						if (get_option('sf_portfolio_nav')) {
						if (!empty($categories)) {
							if (isset($_GET[pcat])) {
								$pcat = $_GET[pcat];
							}
							else { $addtoclass = " class=\"active\""; }
					?>
					<div class="portfnav">
						<ul>
							<li><span>Select a Category:</span></li>
							<li<?=$addtoclass; ?>><a href="<?php echo get_permalink(); ?>">All</a></li>
							<?php sf_list_portfolio_child_categories($category,$pcat,get_permalink()); ?>
						</ul>
					</div>
					<?php } }?>
					<h2 class="title"><?php the_title(); ?></h2>
					<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
					<?PHP $thumb = get_post_meta($post->ID, 'thumb-large', true); ?>
					<img src="<?php echo $thumb; ?>" alt="<?php the_title(); ?>" class="thumblarge"/>
					<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
          <h3><a href="/projects">Back to All projects Page</a></h3>
				</div>

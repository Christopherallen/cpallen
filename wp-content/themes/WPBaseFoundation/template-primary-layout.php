<?php
/* Template Name: Primary Layout */

 get_header(); ?>

 <div class="content">
 		<?php if (is_page('Work')) { ?>
 		<?php
		     $query = new WP_Query(array('post_type'=>'project', 'taxonomy'=>'project_category', 'posts_per_page' => 8, 'orderby'=>'menu_order', 'order'=>'ASC'));
		     while ($query->have_posts()) : $query->the_post();
		     ?>
		    <div class="work-wrapper">
		    	<a href="<?php the_permalink(); ?>">
			    	<div class="list-item work">
			    		<?php if ( has_post_thumbnail() ) { 
		            		the_post_thumbnail('featured');
		           		} ?>
			    		<h3 class="list-item-title"><?php the_title(); ?></h3>
			    		<div class="hover-content">
			     			<h3 class="hover-content-title">View Case Study</h3>
			     		</div>
			     	</div>
		     	</a>	
		    </div>
		<?php endwhile; wp_reset_query(); ?>
		<?php } elseif (is_page('Contact')) { ?>
			<div class="row">
				<div class="contact">
					<div class="contact-info">
						<?php if (have_posts()) : while (have_posts()) : the_post();?>
							<?php the_content(); ?>
						<?php endwhile; endif; ?>
					</div>	
					<?php echo do_shortcode('[contact-form-7 id="65" title="Contact form 1"]'); ?>
				</div>
			</div>	
		<?php } ?>
 </div>

 <?php get_footer(); ?>
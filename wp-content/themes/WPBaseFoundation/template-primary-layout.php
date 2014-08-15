<?php
/* Template Name: Primary Layout */

 get_header(); ?>

 <div class="content">
 	<div class="row">
 		
 		<?php
		     $query = new WP_Query(array('post_type'=>'project', 'taxonomy'=>'project_category', 'posts_per_page' => 8, 'order' => 'asc'));
		     while ($query->have_posts()) : $query->the_post();
		     ?>
		    <div class="large-6 columns">
		    	<?php $hex = get_post_meta( get_the_ID(), 'cpa_post_class', true ); ?>
		    	<a href="<?php the_permalink(); ?>">
			    	<div class="list-item work" <?php if( ! empty( $hex ) ) { ?>style="border-bottom:5px solid #<?php echo $hex; ?>"<?php } ?>>
			    		<?php $work_image = get_field('secondary_image') ;?>
			    		<img src="<?php echo $work_image['sizes']['work']; ?>" alt="<?php echo $work_image['alt']; ?>" class="work-image" />
			           	<div class="media-body">
					    	<h3 class="list-item-title"><?php the_title(); ?></h3>
					     	<p><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 150, '...');?></p>
					    </div>
			     	</div>
		     	</a>	
		    </div>
		<?php endwhile; wp_reset_query(); ?>
 	</div>
 </div>

 <?php get_footer(); ?>
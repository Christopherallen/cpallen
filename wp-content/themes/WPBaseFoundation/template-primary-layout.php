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
		    	<a href="">
			    	<div class="list-item work" <?php if( ! empty( $hex ) ) { ?>style="background: #<?php echo $hex; ?>"<?php } ?>>
			    		<?php if ( has_post_thumbnail() ) { 
			            	the_post_thumbnail('featured');
			           	} ?>
			           	<div class="media-body">
					    	<h2><?php the_title(); ?></h2>
					     	<p><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 150, '...');?></p>
					    </div>
			     	</div>
		     	</a>	
		    </div>
		<?php endwhile; wp_reset_query(); ?>
 	</div>
 </div>

 <?php get_footer(); ?>
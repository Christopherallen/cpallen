<?php
/*
Template Name: Archives
*/
 get_header(); ?>

 <div class="content">
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
 </div>

 <?php get_footer(); ?>
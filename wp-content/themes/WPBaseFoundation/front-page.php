<?php get_header(); ?>
    <div class="content">
        <div class="row">
        	<h2 class="block-title">Featured Work</h2>
        </div>

	    <?php
	    $query = new WP_Query(array('post_type'=>'project', 'taxonomy'=>'project_category', 'term' => 'featured', 'posts_per_page' => 2, 'order' => 'asc'));
	    while ($query->have_posts()) : $query->the_post();
	    ?>
		<?php $hex = get_post_meta( get_the_ID(), 'cpa_post_class', true ); ?>
		<div class="list-item featured" <?php if( ! empty( $hex ) ) { ?>style="background-color: #<?php echo $hex; } ?>">
		    <div class="row">
		    	<div class="media-object large-6 columns">
			     	<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
		            	the_post_thumbnail('featured');
		           	} ?>
	            </div>
	            <div class="media-body large-6 columns">
			    	<h3 class="list-item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			     	<p><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 250, '...');?></p>
			     	<a href="<?php the_permalink(); ?>" class="button">Case Study</a>
			    </div>
		    </div>
		</div>
		<?php endwhile; wp_reset_query(); ?>

		<div class="row text-center">
			<a href="work" class="button large">View All Work</a>
		</div>
    </div>  


<?php get_footer(); ?> 
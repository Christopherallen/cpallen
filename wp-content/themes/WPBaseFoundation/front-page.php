<?php get_header(); ?>
    <div id="featured" class="content">
        <div class="row">
        	<h2 class="block-title">Featured Work</h2>
        </div>

	    <?php
	    $query = new WP_Query(array('post_type'=>'project', 'taxonomy'=>'project_category', 'term' => 'featured', 'posts_per_page' => 2, 'orderby'=>'menu_order', 'order'=>'asc'));
	    while ($query->have_posts()) : $query->the_post();
	    ?>
		<div class="list-item featured">
		    	<div class="media-object">
			     	<a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
		            	the_post_thumbnail('featured');
		           	} ?></a>
	            </div>
	            <div class="media-body">
			    	<h3 class="list-item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			     	<p><?php the_excerpt(); ?></p>
			     	<a href="<?php the_permalink(); ?>" class="button primary">Case Study<span class="icon-arrow-right3"></span></a>
			    </div>
		</div>
		<?php endwhile; wp_reset_query(); ?>

		<div class="row text-center">
			<a href="work" class="button tertiary large">View All Work</a>
		</div>
    </div>  


<?php get_footer(); ?> 
<script type="text/javascript">
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
</script>
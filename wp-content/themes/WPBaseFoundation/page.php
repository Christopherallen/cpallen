<?php get_header(); ?>


<div class="content">
    <div class="sub-header">
        <h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
    </div>

    <div class="row">
        <?php 
        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
            the_post_thumbnail('featured');
           }             
        ?>
    
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    

        <?php the_content(); ?>
        
        <?php endwhile; endif; ?>       
    </div>
</div>

<?php get_footer(); ?> 
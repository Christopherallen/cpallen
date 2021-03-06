<?php get_header(); ?>

<div class="content">
    <div class="row">
        <div class="large-9 columns">
            <?php 
            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                the_post_thumbnail('featured');
            }             
            ?>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

            <?php the_content(); ?>

            <?php endwhile; endif; ?>
        </div>
         <div class="large-3 columns">
            <?php get_sidebar(); ?>
         </div>
    </div>  
</div>

<?php get_footer(); ?> 

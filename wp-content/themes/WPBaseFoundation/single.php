<?php get_header(); ?>

<div class="content">
    <div class="row">
    
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <h3 class="list-item-title" itemprop="headline"><?php the_title(); ?></h3>

            <?php the_content(); ?>
            <?php if( get_field('project_url') ) { ?><a href="<?php the_field('project_url') ?>" target="_blank"><?php the_field('project_url') ?></a><?php } ?>

        <?php endwhile; endif; ?>       
    </div>
</div>  

<!--div class="row">
    <?php get_sidebar(); ?>
</div-->

<?php get_footer(); ?> 

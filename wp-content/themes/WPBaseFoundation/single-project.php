<?php get_header(); ?>

<div class="content">
    <div class="row">
      <div class="work-detail-description">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <h3 class="list-item-title" itemprop="headline"><?php the_title(); ?></h3>
            <?php the_content(); ?>
            <?php if( get_field('project_url') ) { ?><a href="http://<?php the_field('project_url') ?>" target="_blank"><span class="icon-link"></span> <?php the_field('project_url') ?></a><?php } ?>

        <?php endwhile; endif; ?>
       </div>  
       <div class="work-detail-specs">
            <ul class="list-item">
                <?php if(get_field('project_specs')): ?>
                    <?php while(has_sub_field('project_specs')): ?>
                    <?php $skills = get_sub_field('programs_languagues'); ?>
                        <li class="list-item-specs"><?php echo $skills ?></li>
                    <?php endwhile; ?>    
                <?php endif; ?>
            </ul>  
       </div>  
    </div> 
</div> 
<div class="navigation-wrapper">
    <div class="row">
        <div class="post-navigation">
            <div class="nav-next"><?php previous_post_link( '%link', 'Next Project' ); ?></div>
            <div class="nav-previous"><?php next_post_link( '%link', 'Prev Project' ); ?></div>
        </div>
    </div>
</div><!-- #post-navigation -->    

<?php get_footer(); ?> 

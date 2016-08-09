<div id="categories_post_type" class="col-lg-8 all">
    <hr>
    <h3> <?php echo get_the_title(); ?> </h3>
    <div class="text">
        <?php the_content(); ?>
        <?php the_field('content'); ?>
    </div>

    <ul class="feed">
        <?php
        // WP_Query arguments
        $args = array (
        'post_type'              => array( get_field('type') ),
        'pagination'             => false,
        'order'                  => 'DESC',
        'orderby'                => 'date',
        'posts_per_page'         => '-1',
        'posts_per_archive_page' => '-1',
        );
        
        // The Query
        $query = new WP_Query( $args );
        // The Loop
        if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
        $query->the_post();?>
        
            <?php 
            switch (get_post_type()) {
            case 'download':?>
            <li> 
            <?php get_template_part('templates/part', 'download-list-content');
             break;?>
            </li>
            <?php case 'video': ?>
            <li>
            <?php get_template_part('templates/part', 'video-list-content');
             break; ?>
            </li>
            <?php case 'people': ?>
            <li class="noborder">
            <?php get_template_part('templates/part', 'people-list-content');
             break; ?>
            </li>
            <?php case 'testimonial': ?>
            <li>
            <?php get_template_part('templates/part', 'testimonial-list-content');
            break; ?>
            </li>
            <?php default: ?>
            <li>
            <?php get_template_part('templates/part', 'item-list-content');
            break; ?>
            </li>
            <?php
            } ?>
        
        <?php
        // debug(get_post());
        // debug(get_post_meta(get_the_ID()));
        }
        } else {
        // no posts found
        }
        // Restore original Post Data
        wp_reset_postdata();
        
        ?>
    </ul>
    <div class="viewall">
    </div>
</div>
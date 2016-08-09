<div class="row">
<div id="categories_post_type" class="col-lg-8 all">
        <hr>
        <h3> <?php echo get_the_title(); ?> </h3>
        <ul class="feed">
            <?php
            // WP_Query arguments
            $args = array (
            'post_type'              => array( 'download' ),
            'pagination'             => false,
            'order'                  => 'DESC',
            'orderby'                => 'date',
            );
            // The Query
            $query = new WP_Query( $args );
            // The Loop
            if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
            $query->the_post();?>
            <li> 
                <?php
                         
                get_template_part('templates/part', 'download-list-content');
                 ?>
            </li>
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
        
    </div>
    <?php get_template_part('templates/part', 'plural-sidebar'); ?>
    </div>
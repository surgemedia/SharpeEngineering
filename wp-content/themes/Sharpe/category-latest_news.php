<div class="row">
    
    <div id="categories_post_type" class="col-lg-8 all">
        <hr>
        <h3> <?php echo get_the_title(); ?> </h3>
        <ul class="feed">
            
            <?php 
            // WP_Query arguments
            $args = array (
                'post_type'              => array( 'post' ),
                'pagination'             => false,
                'order'                  => 'DESC',
                'orderby'                => 'date',
            );
            
            // The Query
            $query = new WP_Query( $args );
            
            // The Loop
            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post();

                    ?>
                    
                 <li> 
                       <?php 
                  
                        if ( has_post_thumbnail() ) { 
                            $noimage="";
                            
                            $url= wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );?>
                    <div class="img extended">
                           <img src="<?php echo aq_resize($url,225,150,true,true,true);?>" alt=""> 
                     </div>
                  <?php }else{
                    $noimage="noimage";
                    }?>
                     <div class="textbox <?php echo $noimage ?>">
                     <span class="title"><?php the_title(); ?> </span>
                     
                     <p><?php if(0 > count(get_the_excerpt())){
                                  the_excerpt();
                                   
                               }else{
                                  truncate(get_the_content(),25,"..."); //It is taking the default content of Posts
                                   truncate(get_field('content'),25,"...");
                               } ?></p>
                        <div class="readmore">
                         <a href="<?php the_permalink()?>"><i class="sharpe-icon-ellipsis"></i></a>
                        </div>
                      </div> 
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
    <?php get_template_part('templates/part', 'carousel'); ?>

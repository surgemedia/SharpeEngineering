<div class="row">
    
    <div id="categories_post_type" class="col-lg-8 all">
        <hr>
        <h3> <?php echo get_the_title(); ?> </h3>
        <ul class="feed">
            
            <?php 
            // WP_Query arguments
            $args = array (
                'post_type'              => array( 'case_study' ),
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
                  
                        if ( has_post_thumbnail() ) { 
                            $url= wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );?>
                    <div class="img extended">
                           <a href="<?php the_permalink()?>">
                           <img width="225" height="150" src="<?php echo aq_resize($url,225,150,true,true,true);?>" alt="">
                           </a> 
                     </div>
                  <?php }?>
                     <div class="textbox">
                     <span class="title"><a href="<?php the_permalink()?>"><?php the_title(); ?> </a></span>
                     
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
        <div class="viewall">
       

        </div>
        <!-- <div class="sharebar">
            <ul>
                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                <li><span><i class="sharpe-icon-arrow-right"></i></span></li>
                <li><a href="" class="media facebook"><i class="sharpe-icon-facebook"></i></a></li>
                <li><a href="" class="media linkedin"><i class="sharpe-icon-linkedin"></i></a></li>
                <li><a href="" class="media twitter"><i class="sharpe-icon-twitter"></i></a></li>

                    
                    
            </ul>
        </div> -->
    </div>
    
    <?php get_template_part('templates/part', 'plural-sidebar'); ?>

</div>
    <?php get_template_part('templates/part', 'carousel'); ?>
<div id="about" class="col-lg-8">
    <div class="content">
        <hr>
        <h3><?php the_title(); ?></h3>

        <div class="img">
            <?php
            if ( has_post_thumbnail() ) {
            $url= wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );?>
            <img width="715" height="350" src="<?php echo aq_resize($url,715,350,true,true,true);?>">
            <?php }?>
        </div>
        <?php the_content(); ?>
        <?php the_field('content'); ?>
        
  
</div>
</div>
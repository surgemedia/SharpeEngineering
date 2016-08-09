<div id="about" class="col-lg-8">
  <div class="content">
    <hr>
    <h3><?php the_title(); ?></h3>
     <div class="img">
      <?php
      if ( has_post_thumbnail() && !get_field('hide_body_image')) {
      $url= wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );?>
      <img width="715" height="350" src="<?php echo aq_resize($url,715,350,true,true,true);?>">
      <?php }?>
    </div>
    <?php the_content(); ?>
    <?php the_field('content'); ?>
    <?php if( have_rows('content_region') ): $cr_counter=0;?>
    <?php while( have_rows('content_region') ): the_row();?>
    <?php if( have_rows('accordion') ): $a_counter=0;?>
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <?php while( have_rows('accordion') ): the_row();?>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading<?php echo $cr_counter.'_'.$a_counter; ?>">
          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $cr_counter.'_'.$a_counter; ?>" aria-expanded="false" aria-controls="collapse<?php echo $cr_counter.'_'.$a_counter; ?>">
            <h4 class="panel-title">
            <?php the_sub_field('row_title');?>
            </h4>
          </a>
        </div>
        <div id="collapse<?php echo $cr_counter.'_'.$a_counter;; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $cr_counter.'_'.$a_counter; ?>">
          <div class="panel-body">
            <a target="_blank" href="<?php the_sub_field('link');?>">
              <img width="auto" height="auto" src="<?php echo aq_resize(get_sub_field('row_image'),220,220,false,true,false);?>" >
            </a>
            <?php the_sub_field('row_content');?>
          </div>
        </div>
      </div>
      <?php $a_counter++; endwhile; ?>
    </div>
    <?php endif; ?>
    <?php the_sub_field('after_accordion_content'); ?>
    <?php $cr_counter++; endwhile; ?>
    <?php endif; ?>
  

    <?php $page = get_page_by_title( 'Careers' );
          if(($page->ID == get_the_ID())) {
       echo do_shortcode('[gravityform id="3" title="false" description="true"]');
             
           } ?>

  </div>
</div>
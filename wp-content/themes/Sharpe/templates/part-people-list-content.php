<!-- <div class="img extended">
  <?php
  if ( has_post_thumbnail() ) {
  $url= wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );?>
  <a href="<?php the_permalink()?>">
    <img width="225" height="150" src="<?php echo aq_resize($url,225,150,true,true,false);?>" >
  </a>
  <?php }?>
</div>
<div class="textbox">
  <span class="title"><a href="<?php the_permalink()?>"><?php the_title(); ?></a> </span>
  <p><?php if(0 > count(get_the_excerpt())){
    the_excerpt();
    }else{
    truncate(get_the_content(),250,"..."); //It is taking the default content of Posts
    truncate(get_field('content'),250,"...");
  } ?></p>
</div> -->


<div class="panel-group" id="accordion<?php echo $post->ID; ?>" role="tablist" aria-multiselectable="true">
 
      


      <div class="panel panel-default">
        


        <div class="panel-heading" role="tab" id="heading<?php echo $post->ID; ?>">
          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $post->ID; ?>" aria-expanded="false" aria-controls="collapse<?php echo $post->ID; ?>">
            <h4 class="panel-title">
            <?php the_title(); ?>
            </h4>
          </a>
        </div>
        <div id="collapse<?php echo $post->ID; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $post->ID; ?>">
          <div class="panel-body">
           <!--  <a >
              <img width="auto" height="auto" src="<?php echo aq_resize(get_sub_field('row_image'),220,220,false,true,false);?>" >
            </a> -->
            <?php echo get_the_content();?>
          </div>
        </div>
     




      </div>




 
    </div>
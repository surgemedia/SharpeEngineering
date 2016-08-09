  <?php
  if ( has_post_thumbnail() ) {
  $url= wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
  $noimage="";?>
<div class="img extended">
  <!-- <a href="<?php the_permalink()?>"> -->
    <img width="225" height="150" src="<?php echo aq_resize($url,225,150,true,true,false);?>" >
  <!-- </a> -->
</div>
  <?php }else { $noimage="noimage";}?>
<div class="textbox <?php echo $noimage ?>">
  
  <!-- <i>“Here’s what we think of Sharpe”</i> <br> -->
  <p><?php if(0 > count(get_the_excerpt())){
    the_excerpt();
    }else{
    if(count(get_the_content())){
    truncate(get_the_content(),250,"..."); //It is taking the default content of Posts
    } else {
    truncate(get_field('content'),250,"...");
    }
  } ?></p>
  <span class="title">
    <!-- <a href="<?php the_permalink()?>"> -->
      <?php the_title(); ?> - <?php the_field("company_name") ?>
    <!-- </a>  -->
  </span>
  <!-- <hr> -->
</div>
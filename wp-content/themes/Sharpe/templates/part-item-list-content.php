  <?php
  if ( has_post_thumbnail() ) {
  $noimage="";
  $url= wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );?>
<div class="img extended">
  <a href="<?php the_permalink()?>">
    <img width="225" height="150" src="<?php echo aq_resize($url,225,150,true,true,false);?>" >
  </a>
</div>
  <?php }else{
    $noimage="noimage";
    }?>
<div class="textbox <?php echo $noimage; ?>">
  <span class="title"><a href="<?php the_permalink()?>"><?php the_title(); ?></a> </span>
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
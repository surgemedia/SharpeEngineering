
<div class="img extended">
  <?php
  
  if ( has_post_thumbnail() ) {
  $url= wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );?>
  <a href="#" data-replaceid="replaceable<?php echo get_the_id()?>" data-contentid="targetVideo<?php echo get_the_id()?>" onclick="getFrameContent(this);" data-toggle="modal" data-target="#videoItem<?php echo get_the_id()?>">
    <img width="225" height="150" src="<?php echo aq_resize($url,225,150,true,true,true);?>" >
  </a>
  <?php }?>
</div>
<div class="textbox">
  <span class="title">
    <a href="#" data-replaceid="replaceable<?php echo get_the_id()?>" data-contentid="targetVideo<?php echo get_the_id()?>" onclick="getFrameContent(this);" data-toggle="modal" data-target="#videoItem<?php echo get_the_id()?>">
      <?php the_title(); ?>
    </a>
  </span>
  
  <p><?php if(0 > count(get_the_excerpt())){
    the_excerpt();
    
    }else{
    truncate(get_the_content(),25,"..."); //It is taking the default content of Posts
    truncate(get_field('content'),25,"...");
  } ?></p>
  <div class="readmore">
    <a href="#" data-replaceid="replaceable<?php echo get_the_id()?>" data-contentid="targetVideo<?php echo get_the_id()?>" onclick="getFrameContent(this);" data-toggle="modal" data-target="#videoItem<?php echo get_the_id()?>"><i class="sharpe-icon-ellipsis"></i></a>
  </div>
  <div class="hiddenFrame" data-frameid="targetVideo<?php echo get_the_id()?>" >
              <iframe width="100%" height="" src="https://www.youtube.com/embed/<?php echo getYtCode([
              'youtube' => get_field("video"),
              'rel' => 0,
              'showinfo' => 0,

              ]); ?>" frameborder="0" allowfullscreen></iframe>
            </div>
</div>
<?php get_template_part('templates/part-modal', 'video'); ?>
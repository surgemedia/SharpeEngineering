<div class="container">
  <?php

    $img=get_field("image_background");
    
    if ( $img ) {
    $url = aq_resize($img['url'],1140,505,true,true,true);

    }else{
    $url = aq_resize(get_field('default_jumbotron','option'),1140,505,true,true,true);
    }
    ?>

  <div class="jumbotron bg_image" background="<?php echo $url; ?>" style="background-image: url('<?php echo $url; ?>'); background-size: cover; background-position-x: center;">
    <?php if (get_field('custom_title')) { ?>
    <span class="title resize visible-md visible-lg"><?php the_field('jumbotron_title'); ?> </span>
    <?php }else{ ?>
    <span class="title visible-md visible-lg"><?php the_title(); ?> </span>
    
    <?php } ?>
    <div class="square visible-md visible-lg"></div>
  </div>
</div>
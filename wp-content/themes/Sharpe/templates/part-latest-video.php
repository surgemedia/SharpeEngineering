<div id="latest_videos" class="col-lg-6">
  <script type="text/javascript">
        function getFrameContent(button){
          jQuery('#replaceable').empty();
          var html;
          var frame;
          frame = jQuery(button).data('contentid');
          html = jQuery('[data-frameid="'+frame+'"]').clone();
          jQuery('#replaceable').html(html);
        }
      </script>
  <hr>
  <a class="visible-sm visible-xs accordion-feed" role="button" data-toggle="collapse" href="#video" aria-expanded="true" aria-controls="video">
  </a>
  <h3><a href="<?php echo get_home_url() ?>/feature-videos" >THE LATEST VIDEOS</a></h3>
  <div class="" id="video">
    <?php
    // WP_Query arguments
    $args = array (
    'post_type'              => array( 'video' ),
    'pagination'             => false,
    'posts_per_page'         => '1',
    'order'                  => 'DESC',
    'orderby'                => 'date',
    );
    // The Query
    $query = new WP_Query( $args );
    // The Loop
    if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
    $query->the_post();?>
    <div class="img">
      <?php
      if ( has_post_thumbnail() ) {
      $url= wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );?>
      <a href="#" data-replaceid="replaceable<?php echo get_the_id()?>" data-contentid="targetVideo<?php echo get_the_id()?>" onclick="getFrameContent(this);" data-toggle="modal" data-target="#videoItem<?php echo get_the_id()?>">
        <img width="554" height="340" src="<?php echo aq_resize($url,554,340,true,true,true);?>" >
        <i class="sharpe-icon-play circle"></i>
      </a>
      <?php }?>
    </div>
    <!-- <div class="video" >
      <?php the_field("video");
      ?>
    </div> -->
    <span class="title"><a href="#" data-replaceid="replaceable<?php echo get_the_id()?>" data-contentid="targetVideo<?php echo get_the_id()?>" onclick="getFrameContent(this);" data-toggle="modal" data-target="#videoItem<?php echo get_the_id()?>"><?php the_title(); ?></a> </span>
    <div class="hiddenFrame" data-frameid="targetVideo<?php echo get_the_id()?>" >
              <iframe width="100%" height="" src="https://www.youtube.com/embed/<?php echo getYtCode([
              'youtube' => get_field("video"),
              'rel' => 0,
              'showinfo' => 0,

              ]); ?>" frameborder="0" allowfullscreen></iframe>
            </div>
    <div class="visible-md visible-lg"><span class="meta postdate visible-md visible-lg"><?php the_date( "j F, Y"); ?></span><?php the_field("content"); ?> </div>
    <?php get_template_part('templates/part-modal', 'video'); ?>
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
    <div class="viewall">
      <a href="<?php echo get_home_url() ?>/feature-videos" ><i class="sharpe-icon-view-all"></i>VIEW ALL VIDEOS</a>
    </div>
  </div>
  
</div>
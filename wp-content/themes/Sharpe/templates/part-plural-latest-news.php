<div id="latest_news" class="col-lg-6">
  <hr>
  <a class="visible-sm visible-xs accordion-feed" role="button" data-toggle="collapse" href="#feed" aria-expanded="true" aria-controls="feed">
  </a>
  <h3><a href="<?php echo get_home_url() ?>/latest-news" >THE LATEST NEWS</a></h3>
  <div class="" id='feed'>
    <ul class="feed" >
      <?php
      // WP_Query arguments
      $args = array (
      'post_type'              => array( 'post' ),
      'pagination'             => false,
      'posts_per_page'         => '3',
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
        <div class="img">
          <?php
          if ( has_post_thumbnail() ) {
          $url= wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );?>
          <a href="<?php the_permalink()?>">
            <img width="150" height="100" src="<?php echo aq_resize($url,150,100,true,true,true);?>" >
          </a>
          <?php }?>
        </div>
        <div class="textbox">
          <span class="title"><a href="<?php the_permalink()?>"><?php the_title(); ?></a> </span>
          <p><?php if(0 > count(get_the_excerpt())){
            the_excerpt();
            }else{
            truncate(get_the_content(),20,"..."); //It is taking the default content of Posts
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
      <a href="<?php echo get_home_url() ?>/latest-news" ><i class="sharpe-icon-view-all"></i>VIEW ALL NEW ARTICLES</a>
      <a href="#" class="pull-right subscribe" data-toggle="modal" data-target="#newsletter"><i class="sharpe-icon-envelope"></i>SUBSCRIBE</a>
    </div>
    <?php get_template_part('templates/part-modal', 'newsletter'); ?>
  </div>
</div>
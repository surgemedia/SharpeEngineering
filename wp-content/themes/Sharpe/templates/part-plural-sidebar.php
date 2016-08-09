<div id="latest_news_short" class="col-lg-4 pull-right visible-lg ">
  <hr>
  <h3><a href="<?php echo get_home_url() ?>/latest-news" >LATEST NEWS</a></h3>
  <div class="viewall">
    <a href="<?php echo get_home_url() ?>/latest-news" ><i class="sharpe-icon-view-all"></i>VIEW ALL</a>
  </div>
  <?php
  // WP_Query arguments
  if (get_field('latest_news')) {
  $args = array (
  'post_type'              => array( 'post' ),
  'pagination'             => false,
  'posts_per_page'         => '3',
  'order'                  => 'DESC',
  'orderby'                => 'date',
  );
  }else{
  $args = array (
  'post_type'              => array( 'post' ),
  'posts_per_page'         => '3',
  'p'                      => (string)get_field('news'),
  );
  }
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
    <a href="<?php the_permalink()?>">
      <img width="365" height="160" src="<?php echo aq_resize($url,365,160,true,true,true);?>" >
    </a>
    <?php }?>
  </div>
  <span class="title"><a href="<?php the_permalink()?>"><?php the_title(); ?></a> </span>
  <?php if(0 > count(get_the_excerpt())){
  the_excerpt();
  }else{
  truncate(get_the_content(),20,"..."); //It is taking the default content of Posts
  } ?>
  <div class="readmore">
    <a href="<?php the_permalink()?>"><i class="sharpe-icon-ellipsis"></i></a>
  <hr>
  </div>
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
</div>
<!-- <div id="casestudies" class="col-lg-4 pull-right">
  <hr>
  <h3>CASE STUDIES</h3>
  <?php
  // WP_Query arguments
  if (get_field('latest_case_study')) {
  $args = array (
  'post_type'              => array( 'case_study' ),
  'pagination'             => false,
  'posts_per_page'         => '1',
  'order'                  => 'DESC',
  'orderby'                => 'date',
  );
  }else{
  $args = array (
  'post_type'              => array( 'case_study' ),
  'posts_per_page'         => '1',
  'p'                      => (string)get_field('case_studies'),
  );
  }
  // The Query
  $query = new WP_Query( $args );
  // The Loop
  if ( $query->have_posts() ) {
  while ( $query->have_posts() ) {
  $query->the_post();?>
  <span class="title"><a href="<?php the_permalink()?>"><?php the_title(); ?></a> </span>
  <?php if(0 > count(get_the_excerpt())){
  the_excerpt();
  }else{
  truncate(get_field("content"),25,"...");
  } ?>
  <div class="readmore">
    <a href="<?php the_permalink() ?>"><i class="sharpe-icon-ellipsis"></i></a>
  </div>
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
</div> -->
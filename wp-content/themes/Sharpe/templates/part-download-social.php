<!-- <div class="download-app">
  <span>Download our App <i class="sharpe-icon-bracket-right-small arrow"></i></span>
  <div class="os">
    <a href="<?php the_field('mac_app','option') ?>"><i class="sharpe-icon-apple apple" ></i></a>
    <a href="<?php the_field('android_app','option') ?>"><i class="sharpe-icon-android android"></i></a>
  </div>
</div> -->
<div class="media">
  <a class="share" role="button" data-toggle="collapse" href="#social" aria-expanded="false" aria-controls="guarantee"><i class="sharpe-icon-share"></i></a>
</div>
<div class="collapse" id="social">
  <ul>
    <li><i class="sharpe-icon-bracket-down arrow"></i>
    </li>
    <?php
    // check if the flexible content field has rows of data
    if( have_rows('social_media','option') ):
    // loop through the rows of data
    while ( have_rows('social_media','option') ) : the_row();
    if( get_row_layout() == 'facebook' ):?>
    <li>
      <a href="<?php the_sub_field('url') ?>" target="_blank">
        <i class="sharpe-icon-facebook facebook"></i>
      </a>
    </li>
    <?php elseif( get_row_layout() == 'twitter' ): ?>
    <li>
      <a href="<?php the_sub_field('url') ?>" target="_blank" class=" ">
        <i class="sharpe-icon-twitter twitter"></i>
      </a>
    </li>
    <?php elseif( get_row_layout() == 'linkedin' ): ?>
    <li>
      <a href="<?php the_sub_field('url') ?>" target="_blank" class=" ">
        <i class="sharpe-icon-linkedin linkedin"></i>
      </a>
    </li>
    <?php elseif( get_row_layout() == 'youtube' ): ?>
    <li>
      <a href="<?php the_sub_field('url') ?>" target="_blank" class=" ">
        <i class="sharpe-icon-youtube youtube"></i>
      </a>
    </li>
    <?php elseif( get_row_layout() == 'instagram' ): ?>
    <li>
      <a href="<?php the_sub_field('url') ?>" target="_blank" class=" ">
        <i class="sharpe-icon-instagram instagram"></i>
      </a>
    </li>
    <?php endif;
    endwhile;
    else :
    // no layouts found
    endif;
    ?>
  </ul>
</div>
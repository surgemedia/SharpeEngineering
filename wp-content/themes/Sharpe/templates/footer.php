<footer class="content-info" role="contentinfo">
  <div class="container">
    <ul class="information">
      <li class="section">
        <ul>
          <li><i class="sharpe-icon-info-bubble"></i></li>
          <li class="title"><span >About Sharpe</span></li>
          <li><p><a href="<?php echo get_home_url() ?>/about-sharpe/careers/">Careers at Sharpe Engineering</a></p></li>
          <li><p><a href="<?php echo get_home_url() ?>/privacy-policy/">Our Privacy Policy</a></p></li>
          <li><p><a href="<?php echo get_home_url() ?>/terms-of-use/">Terms of use</a></p></li>
        <li><p><a href="<?php echo get_home_url() ?>/extra-downloads">Downloads (view all)</a></p></li>
        </ul>
      </li>
<!--       <li class="section">
        <ul>
          <li><i class="sharpe-icon-download"></i></li>
          <li class="title"><span>Downloads</span></li>
          <li><p><a href="<?php the_field('mac_app','option') ?>">Download IPhone app</a></p></li>
          <li><p><a href="<?php the_field('android_app','option') ?>">Download Android app</a></p></li>
          <li><p><a href="<?php echo get_home_url() ?>/extra-downloads">Extra downloads (view all)</a></p></li>
        </ul>
      </li> -->
      <li class="section">
        <ul>
          <li><i class="sharpe-icon-ellipsis-bubble"></i></li>
          <li class="title"><span>Contact Roma</span></li>
          <?php
          // check if the flexible content field has rows of data
          if( have_rows('footer_roma_info','option') ):
          // loop through the rows of data
          while ( have_rows('footer_roma_info','option') ) : the_row();
          if( get_row_layout() == 'telephone' ):?>
          <li><p><?php the_sub_field('line'); ?></p></li>
          <?php  elseif( get_row_layout() == 'email' ): ?>
          <li><p><?php the_sub_field('line'); ?></p></li>
          <?php  elseif( get_row_layout() == 'fax' ): ?>
          <li><p><?php the_sub_field('line'); ?></p></li>
          <?php  elseif( get_row_layout() == 'address_1' ): ?>
          <li><p><?php the_sub_field('line'); ?></p></li>
          <?php  elseif( get_row_layout() == 'address_2' ): ?>
          <li><p><?php the_sub_field('line'); ?></p></li>
          <?php endif;
          endwhile;
          else :
          // no layouts found
          endif;
          ?>
          <!--          <li><p><?php the_field('roma_address', 'option'); ?></p></li>
          <li><p>E <?php the_field('roma_email', 'option'); ?></p></li>
          <li><p>T <?php the_field('roma_telephone', 'option'); ?></p></li> -->
        </ul>
      </li>
      <li class="section">
        <ul>
          <li><i class="sharpe-icon-ellipsis-bubble"></i></li>
          <li class="title"><span>Contact Brisbane</span></li>
          <?php
          // check if the flexible content field has rows of data
          if( have_rows('footer_brisbane_info','option') ):
          // loop through the rows of data
          while ( have_rows('footer_brisbane_info','option') ) : the_row();
          if( get_row_layout() == 'telephone' ):?>
          <li><p><?php the_sub_field('line'); ?></p></li>
          <?php  elseif( get_row_layout() == 'email' ): ?>
          <li><p><?php the_sub_field('line'); ?></p></li>
          <?php  elseif( get_row_layout() == 'fax' ): ?>
          <li><p><?php the_sub_field('line'); ?></p></li>
          <?php  elseif( get_row_layout() == 'address_1' ): ?>
          <li><p><?php the_sub_field('line'); ?></p></li>
          <?php  elseif( get_row_layout() == 'address_2' ): ?>
          <li><p><?php the_sub_field('line'); ?></p></li>
          <?php endif;
          endwhile;
          else :
          // no layouts found
          endif;
          ?>
          <!--          <li><p><?php the_field('brisbane_address', 'option'); ?></p></li>
          <li><p>E <?php the_field('brisbane_email', 'option'); ?></p></li>
          <li><p>T <?php the_field('brisbane_telephone', 'option'); ?></p></li> -->
        </ul>
      </li>
      <li class="section">
        <ul>
          <li class="title"><span >Quality Accreditations</span></i></li>
          <li><?php
            $images = get_field('accreditation_gallery','option');
            if( $images ): ?>
            <?php foreach( $images as $image ):?>
            <img src="<?php echo aq_resize($image['url'],130,45,false);?>" height="45">
            <?php endforeach; ?>
          <?php endif; ?></li>
          <li class="xx-small"><?php the_field('accreditation_content', 'option'); ?> </li>
        </ul>
      </li>
    </ul>
  </div>
  <div class="bg_dark_grey">
    <div class="container bg_dark_grey lace">
      <div class="row">
        <div class="col-lg-4 col-md-4 "><span>&copy; Sharpe Engineering 2015 | All Rights reserved</span></div>
        <!-- <div class="col-lg-4 col-md-4 text-center"><img src="<?php the_field('footer_logo','option');?>" width="313" height="56"></div> -->
        <div class="col-lg-8 col-md-8 "><a href="http://www.surgemedia.com.au"><span class="pull-right">Surge Media</span></a></div>
<!--         <div class=" visible-xs visible-sm"><span>&copy; Sharpe Engineering 2015 | All Rights reserved</span></div>
        <div class=" visible-xs visible-sm"><a href="http://www.surgemedia.com.au"><span >Surge Media</span></a></div>-->      </div>
    </div>
  </div>
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
</footer>
<?php use Roots\Sage\Nav; ?>
<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only"><?php echo __('Toggle navigation', 'sage'); ?></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button> -->
      <div class="menu">
        <?php
        if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new Nav\SageNavWalker(), 'menu_class' => 'nav navbar-nav']);
        endif;
        ?>
      </div>
      

      <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" title="<?php
      bloginfo('name'); ?>" ><img src="<?php the_field('logo','option');?>" widht="252" height="70"></a>
      <div class="col-lg-3 col-md-3 visible-md visible-lg"> <span class="head-info">DRILLING FOCUSED RESOURCES AND ENERGY SPECIALISTS</span></div>
      <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 pull-right apps text-right">
        <div class="row">
          <?php get_template_part('templates/part', 'download-social'); ?>
          <?php $page = get_page_by_title( 'Contact Us' );
          if(!($page->ID == get_the_ID())) {
            get_template_part('templates/part-modal', 'item'); ?>
              <button id="quote" type="button" class="btn aside-button" data-toggle="modal" data-target="#modalItem">REQUEST A QUOTE ONLINE</button>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  <?php get_template_part('templates/part', 'jumbotron'); ?>
  <?php get_template_part('templates/part', 'breadcrumbs'); ?>
  <?php $page_contact_us = get_page_by_title( 'Contact Us' )->ID;
        $page_careers = get_page_by_title( 'Careers' )->ID;
        $current_page = get_the_ID();
      if(!($page_contact_us == $current_page || $page_careers == $current_page)) {
        get_template_part('templates/part-modal', 'item'); 
      } ?>
        
</header>
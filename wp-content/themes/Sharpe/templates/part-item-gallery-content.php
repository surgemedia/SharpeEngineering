<div id="about" class="col-lg-8">
  <div class="content">
    <hr>
    <h3><?php the_title(); ?></h3>
    <div class="img">
<!-- Thumbnail -->
      <?php
      if ( has_post_thumbnail() ) {
      $url= wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );?>
      <img width="715" height="350" src="<?php echo aq_resize($url,715,350,true,true,true);?>" >
      <?php }?>
    </div>

<!-- Content -->
    <?php the_content(); ?>

<!-- Accordion -->
    <?php if( have_rows('content_region') ): $cr_counter=0;?>
    <?php while( have_rows('content_region') ): the_row();?>
    <?php if( have_rows('accordion') ): $a_counter=0;?>
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <?php while( have_rows('accordion') ): the_row();?>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading<?php echo $cr_counter.'_'.$a_counter; ?>">
          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $cr_counter.'_'.$a_counter; ?>" aria-expanded="false" aria-controls="collapse<?php echo $cr_counter.'_'.$a_counter; ?>">
            <h4 class="panel-title">
            <?php the_sub_field('row_title');?>
            </h4>
          </a>
        </div>
        <div id="collapse<?php echo $cr_counter.'_'.$a_counter; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $cr_counter.'_'.$a_counter; ?>">
          <div class="panel-body">
            <a target="_blank" href="<?php the_sub_field('link');?>">
              <img width="auto" height="auto" src="<?php echo aq_resize(get_sub_field('row_image'),220,220,false,true,false);?>" >
            </a>
            <?php the_sub_field('row_content');?>
          </div>
        </div>
      </div>
      <?php $a_counter++; endwhile; ?>
    </div>
    <?php endif; ?>
    <?php the_sub_field('after_accordion_content'); ?>
    <?php $cr_counter++; endwhile; ?>
    <?php endif; ?>


<!-- Linking Gallery  -->      
<?php if( have_rows('gallery_link') ): ?>

   <ul class="gallery">

  <?php while( have_rows('gallery_link') ): the_row(); 

    // vars
    $image = get_sub_field('image');
    $link = get_sub_field('link');

    ?>

    <li class="col-lg-3 col-md-3" style="height:150px">

      <?php if( $link ): ?>
        <a href="<?php echo $link; ?>" target="_blanck">
      <?php endif; ?>

        <img width="150" height="150" src="<?php echo aq_resize($image['url'],150,150,false,true,true);?>" alt="<?php echo $image['alt']; ?>" class="img-responsive"/>

      <?php if( $link ): ?>
        </a>
      <?php endif; ?>

    </li>

  <?php endwhile; ?>

  </ul>

<?php endif; ?>



<!-- Modal Gallery -->
    <?php
    $images = get_field('gallery');
    if( $images ): ?>
    <ul class="gallery">
      <?php foreach( $images as $image ): ?>
      <li class="col-lg-3">
        <a href="<?php echo aq_resize($image['url'],1250,650,false,true,false);?>" data-toggle="lightbox" data-gallery="multiimages">
          <img width="150" height="150" src="<?php echo aq_resize($image['url'],150,150,false,true,false);?>" alt="<?php echo $image['alt']; ?>" class="img-responsive"/>
        </a>
        <!-- <p><?php echo $image['caption']; ?></p> -->
      </li>
      <?php endforeach; ?>
    </ul>
    <?php endif; ?>
  </div>
</div>
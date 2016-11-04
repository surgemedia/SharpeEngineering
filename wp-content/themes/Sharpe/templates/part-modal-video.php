<div class="modal fade video_item" id="videoItem<?php echo the_id()?>" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content ">
      <div class="video-content">
        <div class="modal-header">
          <h2 class="modal-title" id="gridSystemModalLabel"><?php the_title(); ?> </h2>
          <b>POSTED <?php the_time( 'M d, Y'); ?></b>
          <a href="#" class="close" data-dismiss="modal" aria-label="Close"><span class="sharpe-icon-close" aria-hidden="true"></span></a>
        </div>
        <div class="modal-body">
          <div class="video" >
            <?php //the_field("video"); ?>
          <iframe width="100%" height="" src="https://www.youtube.com/embed/<?php echo getYtCode([
          'youtube' => get_field("video"),
          'rel' => 0,
          'showinfo' => 0,

          ]); ?>" frameborder="0" allowfullscreen></iframe>
          </div>
          <div class="margin">
            <span class="title">DESCRIPTION</span>
            <?php the_field("content"); ?>
            <div class="viewall">
              <a href="<?php echo get_home_url() ?>/feature-videos" ><i class="sharpe-icon-bracket-right-small"></i>VIEW ALL VIDEOS</a>
            </div>
            <?php get_template_part('templates/part', 'social-buttons'); ?>
          </div>
        </div>
      </div>
      </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
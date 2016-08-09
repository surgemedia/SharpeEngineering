<div class="modal fade" id="modalItem" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <img width="140" height="28" src="<?php the_field('logo', 'option'); ?>"  style="float:right;width:10em;height:2em;"> <h4 class="modal-title" id="gridSystemModalLabel">REQUEST A QUOTE</h4>
        <a href="#" class="close" data-dismiss="modal" aria-label="Close"><span class="sharpe-icon-close2" aria-hidden="true"></span></a>
      </div>
      <div class="modal-body">
        <?php
        $form_object = get_field('request_form','option');
        echo do_shortcode('[gravityform id="' . $form_object['id'] . '" title="false" description="true" ajax="true"]');
        ?>
      </div>
      </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
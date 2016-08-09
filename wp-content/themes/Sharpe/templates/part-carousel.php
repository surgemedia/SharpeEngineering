<div id="client-slider" class="carousel slide" data-ride="carousel" data-interval="5000">
  <h4 class="title">Sharpe’s Valued Clients Include..</h4>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <div class="row line">
        <?php
        $images = get_field('partners_gallery','option');
        // debug($images);
        $num_images=sizeof($images);
        $count=0;
        $offset=true;
        if( $images ): ?>
        <?php foreach( $images as $image ):
        $count++;
        // (($count-1)%6==0)? $offset="col-lg-offset-1":$offset=""; ?>
        <div class="col-lg-2">
          <img width="140" height="auto" src="<?php echo aq_resize($image['url'],170,60,false,true,false);  ?>" alt="<?php echo $image['alt']; ?>"  />
        </div>
        <?php
        if ($count==$num_images) {?>
      </div>
    </div>
    <?php }else{
    if ($count%6 == 0){
    // if (($count/6)%2 == 0){ ?>
  </div>
</div>
<div class="item ">
  <div class="row line">

    <?php     //}
    }
    }?>
    <?php endforeach; ?>
    <?php endif; ?>
    <a class="left carousel-control" href="#client-slider" role="button" data-slide="prev">
      <span class="sharpe-icon-bracket-left" aria-hidden="true"></span>
    </a>
    <a class="right carousel-control" href="#client-slider" role="button" data-slide="next">
      <span class="sharpe-icon-bracket-right" aria-hidden="true"></span>
    </a>
  </div>
  <!-- Controls -->
</div>
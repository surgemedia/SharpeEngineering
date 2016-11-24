<div class="row">
    <div class="col-lg-7 visible-lg">
        <?php
        $images = get_field('gallery');
        if( $images ): ?>
        <ul id="slider_nav" class="">
            <?php $index=1;
                foreach( $images as $image ): ?>
            <li class="">
                <!-- <a href="<?php echo $image['url']; ?>"> -->
                <img width="150" height="125" src="<?php echo aq_resize($image['url'],150,125,true);  ?>" alt="<?php echo $image['alt']; ?>" index=<?php echo $index++;?> jumbotron="<?php echo aq_resize($image['url'],1140,505, true, true, true ); ?>" />
                <!-- </a> -->
                <!-- <p><?php echo $image['caption']; ?></p> -->
            </li>
            <?php endforeach; ?>
        </ul>
        
        <?php endif; ?>
    </div>
    <div class="col-lg-5 col-md-5 clear-fix visible-md visible-lg">
        <div id="phone" class="text-center">
            <i class="sharpe-icon-phone"></i>
            <span><?php the_field('main_telephone', 'option'); ?></span>
        </div>
    </div>
</div>
<div class="row">
    <main class="col-lg-10 col-md-10 pull-right">
    <div class="about_excerpt"><?php
        $content=get_post_field('post_content', get_id_from_slug("about-sharpe"));
        $url=get_post_field('post_name', get_id_from_slug("about-sharpe"));
        truncate($content,60,"...");
        // if(0 > count(get_the_excerpt())){
        //    the_excerpt();
        // }else{
        //    truncate(get_the_content(),60,"..."); //It is taking the default content of Posts
        //     truncate(get_field('content'),60,"...");
        // }
        ?>
    </div>
    <div class="readmore">
        <a href="<?php echo $url?>"><i class="sharpe-icon-ellipsis"></i></a>
    </div>
    </main>
    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 pull-left">
        <a class="btn_quality" role="button" data-toggle="collapse" href="#guarantee" aria-expanded="false" aria-controls="guarantee">
        <img width="165" height="89" src="<?php the_field('quality_icon'); ?>" style="width:100%"></a>
        <div class="collapse" id="guarantee">
            <div class="bg_white content">
                <a class="icon" role="button" data-toggle="collapse" href="#guarantee" aria-expanded="false" aria-controls="guarantee">
                    <img  width="165" height="89" src="<?php the_field('quality_icon');?>" style="width:100%">
                </a>
                <img class="logo pull-right visible-lg visible-md" width="200" height="48" src="<?php the_field('logo','option');?>"  />
                <p class="col-lg-12"><?php the_field('quality_text');?></p>
                <ul class="">
                    <li class="col-lg-12 col-md-12"><a class="btn btn-grey" href="<?php echo get_home_url() ?>/quality"><span>OVERVIEW</span><i class="sharpe-icon-bracket-right-small"></i></a></li>
                    <li class="col-lg-6 col-md-6"><a class="btn btn-grey" href="<?php echo get_home_url() ?>/quality/iso-certification"><span>OUR ISO</span><i class="sharpe-icon-bracket-right-small"></i></a></li>
                    <li class="col-lg-6 col-lg-6"><a class="btn btn-grey" href="<?php echo get_home_url() ?>/quality/api-certifications"><span>OUR API</span><i class="sharpe-icon-bracket-right-small"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
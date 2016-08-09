<?php
/**
* Template Name: Home Page
*/
?>
<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/part', 'home-details'); ?>
    <div class="row">
        <?php get_template_part('templates/part', 'plural-latest-news'); ?>
        <?php get_template_part('templates/part', 'latest-video'); ?>
    </div>
        <?php get_template_part('templates/part', 'carousel'); ?>
        <!--  <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol> -->
<?php endwhile; ?>
<?php
/**
* Template Name: Categories View
*/
?>
<?php while (have_posts()) : the_post(); ?>

<div class="row">
    
    <?php get_template_part('templates/part', 'plural-post-types'); ?>
    
    <?php get_template_part('templates/part', 'plural-sidebar'); ?>

</div>
    <?php get_template_part('templates/part', 'carousel'); ?>


<?php endwhile; ?>
<?php
/**
* Template Name: Main and Post Sidebar
*/
?>
<?php while (have_posts()) : the_post(); ?>

<div class="row">
    
    <?php get_template_part('templates/part', 'item-content'); ?>

    <?php get_template_part('templates/part', 'plural-sidebar'); ?>

</div>
    <?php get_template_part('templates/part', 'carousel'); ?>


<?php endwhile; ?>
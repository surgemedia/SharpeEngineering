<?php
/**
* Template Name: Contact Page
*/
?>
<?php while (have_posts()) : the_post(); ?>

<div class="row">
    
    <?php get_template_part('templates/part-contact', 'content'); ?>
    
    <?php get_template_part('templates/part-contact', 'sidebar'); ?>

</div>
    <?php get_template_part('templates/part', 'carousel'); ?>


<?php endwhile; ?>
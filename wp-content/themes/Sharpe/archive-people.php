<?php
/*
Template Name: Archives
*/
?>


<div id="container">
	<div id="content" role="main">
<?php while (have_posts()) : the_post(); ?>
		<?php the_post(); ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
<?php endwhile; ?>		
		<?php get_search_form(); ?>
		
		<h2>Archives by Month:</h2>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>
		
		<h2>Archives by Subject:</h2>
		<ul>
			 <?php wp_list_categories(); ?>
		</ul>

	</div><!-- #content -->
</div><!-- #container -->
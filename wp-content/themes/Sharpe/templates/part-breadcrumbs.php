<div class="container visible-md visible-lg">
	<div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
<?php if (is_single() || is_category() || is_page('feature-videos')) {?>

		<?php if(function_exists('bcn_display'))
		{   bcn_display();
		}?>







<?php }else{ ?>
		<?php 
		//if(function_exists('bcn_display')){   bcn_display();} 
		?>
		<?php 
		    if ( function_exists( 'menu_breadcrumb') ) { 
		       $breadcrumb_array = menu_breadcrumb( 
		            'primary_navigation',            						// Menu Location to use for breadcrumb
		            ' <i class="glyphicon glyphicon-chevron-right"></i> ',  // separator between each breadcrumb
		            '<span typeof="v:Breadcrumb"><span>You Are Here</span></span><i class="glyphicon glyphicon-chevron-right"></i> ',  	// output before the breadcrumb
		            ''                             							 // output after the breadcrumb
		        ); 

		    } 
} ?>
	</div>
</div> 
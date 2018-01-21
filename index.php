<div class="container">
	<?php get_header(); ?>

<div class="row">
	<div class="col s12 m4 l3">
<?php get_sidebar(); ?>
</div>
	<div class="col s12 m8 l9">
			<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
					get_template_part( 'content', get_post_format() );
  
				endwhile; else:
			?>

		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		  
<?php endif; ?>
<ul class="pagination">
		  			<li class="waves-effect"><?php next_posts_link( 'Previous' ); ?></li>
					<li class="waves-effect"><?php previous_posts_link( 'Next' ); ?></li>

		  </ul>
		</div><!-- /.col -->
	</div> <!-- /.row -->
<?php get_footer(); ?>
</div>
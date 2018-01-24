	<h2 id="post-<?php the_ID(); ?>">
		<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
	</h2>
<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>
<a href="<?php comments_link(); ?>">
	<?php
	printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( 						get_comments_number() ) ); ?>
</a>
<?php if ( has_post_thumbnail() )  { ?>
	<div class="row">
		<div class="col s12 m7 l5">
			<div class="card">
			<div class="card-image">
			<?php the_post_thumbnail('thumbnail'); ?>
			<span class="card-title">TEST</span>
			</div>
		</div>
		<div class="card-content">
				<?php the_excerpt('Read the rest of this entry &raquo;'); ?>
		</div>
		<div class="card-action">
			<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
		</div>
	</div>
</div>
<?php } else { ?>

	<div class="entry s12 m10 l7">
		<?php the_excerpt('Read the rest of this entry &raquo;'); ?>
	</div>
<?php } ?>

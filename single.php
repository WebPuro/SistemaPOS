<?php get_header(); ?>

	<article>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
			<a href="<?php the_permalink()?>"><h2><?php the_title(); ?></h2></a>
			<p>Fecha de Publicación: <?php the_date('Y-m-d G:i a')?></p>
			<p><?php the_content(); ?></p>
			<hr>
		
		<?php endwhile; else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
		
	</article>

<?php get_footer();?>
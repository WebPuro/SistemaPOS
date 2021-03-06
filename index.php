<?php get_header(); ?>

	<main>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
			<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
			<p>Fecha de Publicación: <?php the_date('Y-m-d G:i a')?></p>
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thb-index'); ?></a>
			<p><?php the_excerpt(); ?></p>
			<hr>
		
		<?php endwhile; else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</main>

<?php get_footer(); ?>
<?php get_header(); ?>


	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
			<div class="post2">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php the_content('Read More'); ?>	
			</div>
		<?php endwhile; ?>



	<?php else : ?>

		<h2 class="center">Not Found</h2>

	<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>


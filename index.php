<?php get_header(); ?>

<div class="content">
	
	<?php get_template_part('inc/featured'); ?>
	
	<div class="content-inner">
	
		<?php if ( get_theme_mod('heading-enable','off') == 'on' ) : ?>
			<?php get_template_part('inc/page-title'); ?>
		<?php endif; ?>
		
		<?php get_template_part('inc/front-widgets-top'); ?>
		
		<?php if ( have_posts() ) : ?>
			
			<div class="blog-content-wrap">
				<?php while ( have_posts() ): the_post(); ?>
					<?php get_template_part('content'); ?>
				<?php endwhile; ?>
			</div>
			
			<?php get_template_part('inc/front-widgets-bottom'); ?>
			<?php get_template_part('inc/pagination'); ?>
			
		<?php endif; ?>
		
	</div>
</div><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
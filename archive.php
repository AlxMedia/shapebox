<?php get_header(); ?>

<div class="content">
	
	<div class="content-inner">
	
		<?php get_template_part('inc/page-title'); ?>
		
		<?php if ( have_posts() ) : ?>
				
			<div class="blog-content-wrap">
				<?php while ( have_posts() ): the_post(); ?>
					<?php get_template_part('content'); ?>
				<?php endwhile; ?>
			</div>
			
			<?php get_template_part('inc/pagination'); ?>
			
		<?php endif; ?>
		
	</div>
	
</div><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
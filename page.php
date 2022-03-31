<?php get_header(); ?>

<div class="content">
	
	<div class="content-inner">
	
		<?php while ( have_posts() ): the_post(); ?>
		
		<article <?php post_class(); ?>>	
	
			<header class="entry-header group">
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			<div class="entry-content">
				<div class="entry themeform">
					<?php the_content(); ?>
					<div class="clear"></div>
				</div><!--/.entry-->
			</div>
			<div class="entry-footer group">
				<?php if ( comments_open() || get_comments_number() ) :	comments_template( '/comments.php', true ); endif; ?>
			</div>

		</article><!--/.post-->	
		
		<?php endwhile; ?>
	
	</div>

</div><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
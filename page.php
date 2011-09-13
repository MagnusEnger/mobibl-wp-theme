<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<div class="post" id="post-<?php the_ID(); ?>">

<div data-role="page" data-theme="b" id="home">

<div data-role="header" data-theme="b">
    <a href="#" data-rel="back">Tilbake</a>
    <h1><?php the_title(); ?></h1>
</div>

<div id="content" data-role="content" data-theme="b">

			<div class="entry">

				<?php the_content(); ?>

				<?php // wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			</div>

			<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

		</div>
		
		<?php // comments_template(); ?>

		<?php endwhile; endif; ?>

<?php // get_sidebar(); ?>

<?php get_footer(); ?>

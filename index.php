<?php get_header(); ?>

    <h2>Søk i katalogen</h2>
    <form method="get" action="/wp-content/plugins/mobibl-wp-plugin/glitre-proxy.php" id="bib-search">
	      <input type="search" name="q" id="search" value="" placeholder="emne/tittel/forfatter" />
		<input type="hidden" name="library" value="demo" /> <!-- NBNBNBNB!!! -->
    <input type="hidden" name="sort_by" value="year" />
    <input type="hidden" name="sort_order" value="descending" />
    <input type="hidden" name="format" value="mobibl" />
		</form>

<?php get_sidebar(); ?>

    <h2>Nyheter</h2>
    <ul id="news-menu" data-role="listview" data-inset="true" data-theme="c" data-dividertheme="b">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
        <?php endwhile;endif ?>
    </ul>

	<?php // include (TEMPLATEPATH . '/inc/nav.php' ); ?>

<?php get_footer(); ?>

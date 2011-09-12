<?php get_header(); ?>

    <!-- h2>Søk</h2 -->
    <form method="get" action="/glitre/api/index.php" id="bib-search">
		<ul data-role="listview">
      <li data-role="fieldcontain">
	      <label for="name">Søk etter emne/tittel/forfatter:</label>
	      <input type="search" name="q" id="search" value=""  />
			</li>
		</ul>
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

<?php
/**
 * The main template file.
 *
 * @package QOD_Starter_Theme
 */
get_header(); ?>
<div id="primary" class="content-area container">
    <main id="main" class="site-main" role="main">
        <?php
        if (have_posts()) :
            while (have_posts()): the_post();
                get_template_part('template-parts/content');
            endwhile;
        else:
            get_template_part('template-parts/content', 'none');
        endif;?>
	</main>
	</div>

	<?php if (is_home() || is_single()): ?>
    <button type="button" id="new-quote-button">Show Me Another!</button>
<?php endif; ?>
<?php get_footer(); ?>

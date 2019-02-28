<?php
/**
 * Template part for displaying posts.
 *
 * @package QOD_Starter_Theme
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="">
        
            <header id="entry-content" class="entry-content">
                <?php the_content(); ?>
            </header><!-- .entry-content -->
            <div id="entry-title" class="entry-title">
                 <?php the_title( ); ?>
            </div><!-- .entry-header -->
        
    </div>
</article><!-- #post-## -->



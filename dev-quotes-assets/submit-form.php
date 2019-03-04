<?php
/**
 * The template for displaying all pages.
 *
 * Template name: Submit Template
 * 
 * 
 * @package QOD_Starter_Theme
 */
get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <section class="quote-submission-container">
            <div class="form-content">

    <div class= "entry-content">
            <header>
                <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
            </header><!-- page header -->

            <?php if (is_user_logged_in() && current_user_can('edit_posts')): ?>

                <form name="quoteForm" id="quote-submission-form" class="quote-submission-form">

                    <div class="quote-author">
                        <label for="quote-author">Author of Quote</label>
                        <input type="text" id="quote_author" name="quote-author">
                    </div>
                    <div class="quote-content">
                        <label for="quote-content">Quote</label>
                        <textarea id="quote_content" name="quote-content" cols="20" rows="3"></textarea>
                    </div>
                    <div class="quote-source">
                        <label for="quote-source">Where did you find this quote? (e.g book name)</label>
                        <input type="text" id="quote_source" name="quote-source">
                    </div>
                    <div class="quote-source-url">
                        <label for="quote-source-url">Provide the URL of the quote source, if available</label>
                        <input type="url" id="quote_source_url" name="quote-source-url">
                    </div>
                    <input id="submit" type="submit" value="Submit Quote">

                </form>

                <p class="submit-success-message" style="display:none;"></p>

            <?php else: ?>
                <p>Sorry, you must be logged in to submit a quote.</p>
                <p>
                    <?php echo sprintf('<a href="%1s">%2s</a>', esc_url(wp_login_url()), 'Click here to login'); ?>
                </p>

            <?php endif; ?>

</div>

        </div> <!--- form content ---> 
        </section><!-- .quote-submission-form -->

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
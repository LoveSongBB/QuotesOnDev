<?php
/**
 * The template for displaying the footer.
 *
 * @package QOD_Starter_Theme
 */
?>
<html>
	<body>
			</div><!-- #content -->
				<footer id="colophon" class="site-footer" role="contentinfo">
					<div class="site-info">
						<div class="navigation">
                			<nav id="site-navigation" class="main-navigation" role="navigation">
								<div class="main-menu-container">
                    				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html( 'Primary Menu' ); ?></button>
                    					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) );   ?> 
										<p>Brought to you by <a href="https://github.com/LoveSongBB">Bryan Tran</a></p>
                				</div>    
							</nav>
						</div>
					</div><!-- .site-info -->
				</footer><!-- #colophon -->
			</div><!-- #page -->
		<?php wp_footer(); ?>
	</body>
</html>

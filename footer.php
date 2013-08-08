			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrap clearfix">

					<div id="footer-widgets">

						<?php if ( is_active_sidebar( 'footer' ) ) : ?>

							<?php dynamic_sidebar( 'footer' ); ?>

						<?php endif; ?>

					</div> <!-- end #footer-widgets -->

					<div id="footer-links">

						<nav role="navigation">
							<?php bones_footer_links(); ?>
						</nav>

						<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. (Version 0.1)</p>

					</div> <!-- end #footer-links -->

				</div> <!-- end #inner-footer -->

			</footer> <!-- end footer -->

		</div> <!-- end #container -->

		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>

	</body>

</html> <!-- end page. what a ride! -->

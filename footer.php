			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrap clearfix">

					<div id="footer-widgets" class="ninecol first">

						<?php if ( is_active_sidebar( 'footer' ) ) : ?>

							<?php dynamic_sidebar( 'footer' ); ?>

						<?php endif; ?>

					</div> <!-- end #footer-widgets -->

					<div id="footer-links" class="threecol last">

						<nav role="navigation">
							<?php bones_footer_links(); ?>
						</nav>

					</div> <!-- end #footer-links -->

				</div> <!-- end #inner-footer -->

			</footer> <!-- end footer -->

		</div> <!-- end #container -->

		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>

	</body>

</html> <!-- end page. what a ride! -->

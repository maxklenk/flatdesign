<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

					<div id="main" class="ninecol first clearfix" role="main">
						<h1 class="archive-title"><span><?php _e('Search Results for:', "bonestheme"); ?></span> <?php echo esc_attr(get_search_query()); ?></h1>

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<?php get_template_part('post'); ?>

						<?php endwhile; ?>

								<?php if (function_exists('bones_page_navi')) { ?>
										<?php bones_page_navi(); ?>
								<?php } else { ?>
										<nav class="wp-prev-next">
												<ul class="clearfix">
													<li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "bonestheme")) ?></li>
													<li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "bonestheme")) ?></li>
												</ul>
										</nav>
								<?php } ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry clearfix">
										<header class="article-header">
											<h1><?php _e("Sorry, No Results.", "bonestheme"); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e("Try your search again.", "bonestheme"); ?></p>
										</section>
										<footer class="article-footer">
												<p></p>
										</footer>
									</article>

							<?php endif; ?>

						</div> <!-- end #main -->

							<?php get_sidebar(); ?>

					</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>

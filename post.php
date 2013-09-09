<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

	<header class="article-header">

		<time class="updated article-date" datetime="<?php echo get_the_time('Y-m-j')?>" pubdate>
			<span class="article-date-day"><?php echo get_the_time('j')?></span>
			<span class="article-date-month"><?php echo get_the_time('M')?></span>
			<span class="article-date-year"><?php echo get_the_time('Y')?></span>
		</time>

		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
			<?php
			// check if the post has a Post Thumbnail assigned to it.
			if ( has_post_thumbnail() ) {
				the_post_thumbnail('flatdesign_post_preview');
			} else {
				?>
				<img width="847" height="222" src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/headers/sky-847-222.jpg" class="attachment-flatdesign_post_preview wp-post-image" alt="<?php the_title(); ?>">
				<?php
			} 
			?>

			<h1 class="h2 post-title"><?php the_title(); ?></h1>
		</a>

	</header> <!-- end article header -->

	<section class="entry-content clearfix">
		<?php the_excerpt(); ?>
	</section> <!-- end article section -->

	<footer class="article-footer">
		<div class="categories first">
			<span class="categories-title"> <?php echo __('Categories:', 'bonestheme') ?> </span>
			<span class="the-categories"> <?php echo get_the_category_list(', ') ?></span>
		</div>
		<div class="tags last">
			<span class="tags-title"><?php echo __('Tags:', 'bonestheme') ?></span>
			<?php the_tags('<span class="the-tags">', ', ', '</span>'); ?>
		</div>
	</footer> <!-- end article footer -->

	<?php // comments_template(); // uncomment if you want to use them ?>

</article> <!-- end article -->
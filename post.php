<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

	<header class="article-header">

		<time class="updated article-date" datetime="<?=get_the_time('Y-m-j')?>" pubdate>
			<span class="article-date-day"><?=get_the_time('j')?></span>
			<span class="article-date-month"><?=get_the_time('M')?></span>
			<span class="article-date-year"><?=get_the_time('Y')?></span>
		</time>

		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
			<?php
			// check if the post has a Post Thumbnail assigned to it.
			if ( has_post_thumbnail() ) {
				the_post_thumbnail('flatdesign_post_preview');
			} else {
				?>
				<img width="750" height="225" src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/headers/sky-750-225.jpg" class="attachment-flatdesign_post_preview wp-post-image" alt="<?php the_title(); ?>">
				<?php
			} 
			?>

			<h1 class="h2 post-title"><?php the_title(); ?></h1>
		</a>

	</header> <!-- end article header -->

	<section class="entry-content clearfix">
		<?php the_excerpt('<span class="read-more">' . __('Read more &raquo;', 'bonestheme') . '</span>'); ?>
	</section> <!-- end article section -->

	<footer class="article-footer">
		<div class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'bonestheme') . '</span> ', ', ', ''); ?></div>
		<div class="categories"><span class="categories-title"> <?=__('Categories:', 'bonestheme') ?> </span> <?=get_the_category_list(', ') ?></div>
	</footer> <!-- end article footer -->

	<?php // comments_template(); // uncomment if you want to use them ?>

</article> <!-- end article -->
<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Reiki_Lafayette
 */
if (!is_singular()) {
	$colClasses = 'col-sm-6 col-xl-4 mb-2';
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class($colClasses); ?>>
	<div class="holder position-relative">
		<?php if (!is_singular()) { ?>
			<?php reiki_lafayette_post_thumbnail(); ?>
		<?php } ?>

		<header class="entry-header">
			<?php
			if (is_singular()) :
				the_title('<h1 class="entry-title">', '</h1>');
			else :
				the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
			endif;

			if ('post' === get_post_type()) :
			?>
				<div class="entry-meta">
					<?php
					// reiki_lafayette_posted_on();
					reiki_lafayette_posted_by();
					?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content">

			<?php if (is_singular()) {
				the_content();

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__('Pages:', 'reiki-lafayette'),
						'after'  => '</div>',
					)
				);
			} else {
				echo wpautop(wp_trim_words(get_the_content(), 50));
			} ?>
			<?php if (!is_singular()) { ?><a href="<?php echo get_the_permalink(); ?>" class="stretched-link readmore">Read More</a><?php } ?>
		</div><!-- .entry-content -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
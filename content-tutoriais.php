<?php ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
		<?php include(STYLESHEETPATH . '/assets/includes/jumbotron.php'); ?>
	</header><!-- .entry-header -->
  <?php if (has_post_thumbnail()): ?>
    <div class="pull-right"><?php the_post_thumbnail('medium'); ?></div>
  <?php endif; ?>
  <div class="container">
    <?php the_content(); ?>
  </div>
</article>

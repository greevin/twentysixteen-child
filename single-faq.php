<?php get_header(); ?>

<div class="container single-container">
  <div class="row">
  	<div class="col-xs-12 col-sm-12">
  		<?php
      if (have_posts()):
        while (have_posts()): the_post();
          get_template_part('content', 'faq');
        endwhile;
      endif;
      ?>
  	</div>
  </div>
</div>

<?php get_footer(); ?>

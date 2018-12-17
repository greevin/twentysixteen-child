<?php get_header(); ?>

<div class="single-equipe container single-container">
  <div class="row">
  	<div class="col-xs-12 col-sm-12">
  		<?php
      if (have_posts()):
        while (have_posts()): the_post();
          get_template_part('content', 'equipe');
        endwhile;
      endif;
      ?>
  	</div>
  </div>
</div>

<?php get_footer(); ?>

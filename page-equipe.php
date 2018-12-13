<?php
// Template Name: Equipe
get_header();
?>

<!-- equipes -->
<div class="equipe pagina-inicial" style="background: white;">
  <div class="container">
    <div class="equipe-atual section-title">
      <header class="entry-header">
		      <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	    </header><!-- .entry-header -->
      <div class="row">
        <?php
           $args = array('post_type' => 'equipe', 'post_status' => 'publish', 'posts_per_page' => -1, 'orderby'=> 'title', 'order' => 'ASC');
           $posts = get_posts($args);

           if($posts) : foreach ($posts as $post) : setup_postdata($post);
        ?>
        <?php include(STYLESHEETPATH . '/assets/includes/card-equipe.php'); ?>

        <?php
           endforeach;
           endif;
        ?>
      </div>
    </div>
    </div>

  </div>
</div>
<?php get_footer(); ?>

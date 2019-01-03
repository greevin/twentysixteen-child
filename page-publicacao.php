<?php
// Template Name: Publicação
get_header();
?>

<!-- equipes -->
<div class="publicacao" style="background: white;">
  <div class="">
    <div class="equipe-atual section-title">
      <header class="entry-header">
        <?php include(STYLESHEETPATH . '/assets/includes/jumbotron.php'); ?>
	    </header><!-- .entry-header -->
      <div class="row page-content">
        <?php
           $args = array('post_type' => 'publicacao', 'post_status' => 'publish', 'posts_per_page' => -1, 'orderby'=> 'title', 'order' => 'ASC');
           $posts = get_posts($args);

           if($posts) : foreach ($posts as $post) : setup_postdata($post);
        ?>

        <?php include(STYLESHEETPATH . '/assets/includes/card-publicacao.php'); ?>

        <?php
           endforeach;
           endif;
        ?>
        <?php wp_reset_postdata(); ?>
      </div>
    </div>
    </div>

  </div>
</div>
<?php get_footer(); ?>

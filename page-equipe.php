<?php
// Template Name: Equipe
get_header();
?>

<!-- equipes -->
<div class="equipe pagina-inicial" style="background: white;">
  <div class="">
    <div class="equipe-atual section-title">
      <header class="entry-header">
        <?php include(STYLESHEETPATH . '/assets/includes/jumbotron.php'); ?>
	    </header><!-- .entry-header -->
      <div class="row page-content">
      <table class="table" style="margin-bottom: 50px;">
        <tr>
          <th>Nome</th>
          <th>Função</th>
          <th>Período</th>
        </tr>
        <tr>
          <?php
           $args = array('post_type' => 'equipe', 'post_status' => 'publish', 'posts_per_page' => -1, 'orderby'=> 'title', 'order' => 'ASC');
           $posts = get_posts($args);

           if($posts) : foreach ($posts as $post) : setup_postdata($post);
          ?>
          <td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
          <td>
            <?php
              $cargos = get_field('funcao');
              if( $cargos ): ?>
              <?php the_field('funcao'); ?><br>
              <?php endif; 
          ?>
          </td>
          <td>
            <?php if( get_field('data_de_inicio') ): ?>
              <?php
                $start_date = get_field('data_de_inicio', false, false);
                $start_date = new DateTime($start_date);

                $end_date = get_field('data_de_fim', false, false);
                $end_date = new DateTime($end_date);
              ?>
              <?php echo $start_date->format('d/m/Y'); ?>
          <?php endif; ?>
          <?php if( get_field('data_de_fim') ): ?>
              <?php
                $end_date = get_field('data_de_fim', false, false);
                $end_date = new DateTime($end_date);

              ?>
              - <?php echo $end_date->format('d/m/Y'); ?>
          <?php endif; ?>
          </td>
        </tr>
        <?php
           endforeach;
           endif;
        ?>
      </table>
      </div>
    </div>
    </div>

  </div>
</div>
<?php get_footer(); ?>

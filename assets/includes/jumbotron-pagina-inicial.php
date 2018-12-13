<?php
// Jumbotron para a página inicial
?>

<section class="introducao">
  <div class="jumbotron jumbotron-fluid text-left">
    <div class="container">
      <?php
        $args = array(
          'name'      => 'jumbotron-pagina-inicial',
          'post_type' => 'configuracoes_tema',
          'post_status' => 'publish'
        );
        $campos_jumbotron_loop = new WP_Query( $args );
        if ( $campos_jumbotron_loop->have_posts() ) :
          while ( $campos_jumbotron_loop->have_posts() ) : $campos_jumbotron_loop->the_post();
      ?>
      <?php if( get_field('jumbotron_titulo') ): ?>
          <h2 class="display-4 jumbotron-title">
            <span class="multi-line"><?php the_field('jumbotron_titulo'); ?></span>
          </h2>
      <?php endif; ?>
      <?php if( get_field('jumbotron_subtitulo') ): ?>
        <p class="lead"><span class="multi-line"><?php the_field('jumbotron_subtitulo'); ?></span></p>
      <?php endif; ?>
      <?php if( get_field('link_da_pagina') ): ?>
        <a href="<?php the_field('link_da_pagina') ?>" class="btn btn-dark my-2"><?php the_field('texto_do_botao') ?></a>
      <?php endif; ?>
    </div>
    <?php
      endwhile;
        wp_reset_postdata();
      endif;
    ?>
  </div>
</section>

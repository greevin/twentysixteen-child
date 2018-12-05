<?php
// Seção Revista da página inicial
?>

<section class="revista pagina-inicial" style="background:#BBD5E7">
  <?php
    $args = array(
      'name'      => 'revista-pagina-inicial',
      'post_type' => 'configuracoes_tema',
      'post_status' => 'publish'
    );
    $edicao_atual_loop = new WP_Query($args);
    if ($edicao_atual_loop->have_posts()) :
      while ($edicao_atual_loop->have_posts()) : $edicao_atual_loop->the_post();
  ?>
  <div class="container">
    <div class="section-title">
      <?php if ( get_field('nome_da_secao') ) : ?>
        <h3><?php the_field('nome_da_secao'); ?></h3>
        <div class="divider"></div>
      <?php endif; ?>
      <div class="row">
        <div class="col-md-4 col-lg-4 mb-4 text-center">
          <a href="<?php the_field('link_edicao_atual'); ?>">
            <img alt="Imagem da Edição Atual" src="<?php the_field('imagem_da_edicao_atual'); ?>" style="border-width:0">
          <a/>
        </div>
        <div class="col-md-8 col-lg-8">
          <?php echo the_field('texto_apresentacao'); ?>
          <?php if ( get_field('link_edicao_atual') ) : ?>
            <a href="<?php the_field('link_edicao_atual'); ?>" class="btn btn-primary">Edição Atual</a>
          <?php endif; ?>
          <a href="<?php the_field('link_edicoes_anteriores'); ?>" class="btn btn-secondary">Edições Anteriores</a>
        </div>
      </div>
    </div>
    <?php
      endwhile;
        wp_reset_postdata();
      endif;
    ?>
  </div>
</section>

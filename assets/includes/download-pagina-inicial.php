<?php
// Seção Download da página inicial
?>

<section class="pagina-inicial">
  <div class="container">
    <?php
      $args = array(
        'name'      => 'secao-download',
        'post_type' => 'configuracoes_tema',
        'post_status' => 'publish'
      );
      $campos_jumbotron_loop = new WP_Query( $args );
      if ( $campos_jumbotron_loop->have_posts() ) :
        while ( $campos_jumbotron_loop->have_posts() ) : $campos_jumbotron_loop->the_post();
    ?>
    <h2 class="text-center">Download</h2>
    <div class="row">
      <!-- Ultima Versão -->
      <div class="col-md-4 col-lg-4 mb-4 text-center">
        <?php $ultima_versao = get_field('ultima_versao'); ?>
        <a href="<?php echo $ultima_versao['link_ultima_versao']; ?>" class="btn btn-secondary" style="display: block;margin: 10px 4px;padding: .5em .6em;white-space: normal;background: #365363;">
          <h2 style="margin-bottom: 0px;"><?php echo $ultima_versao['numero_ultima_versao']; ?></h2>
          <?php echo $ultima_versao['texto_ultima_versao']; ?>
        </a>
        <a href="<?php echo $ultima_versao['atual_link_primeiro_campo']; ?>"><?php echo $ultima_versao['atual_texto_primeiro_campo']; ?></a><br>
        <a href="<?php echo $ultima_versao['atual_link_segundo_campo']; ?>"><?php echo $ultima_versao['atual_texto_segundo_campo']; ?></a>
      </div>
      <!-- Patch de Atualização -->
      <div class="col-md-4 col-lg-4 text-center">
        <?php $patch_de_atualizacao = get_field('patch_de_atualizacao'); ?>
        <a href="<?php echo $patch_de_atualizacao['link_patch_atualizacao']; ?>" class="btn btn-secondary" style="display: block;margin: 10px 4px;padding: .5em .6em;white-space: normal;background: #6b828d;">
          <h2 style="margin-bottom: 0px;"><?php echo $patch_de_atualizacao['numero_patch_atualizacao']; ?></h2>
          <?php echo $patch_de_atualizacao['texto_patch_atualizacao']; ?>
        </a>
        <a href="<?php echo $patch_de_atualizacao['patch_link_primeiro_campo']; ?>"><?php echo $patch_de_atualizacao['patch_texto_primeiro_campo']; ?></a><br>
        <a href="<?php echo $patch_de_atualizacao['patch_link_segundo_campo']; ?>"><?php echo $patch_de_atualizacao['patch_texto_segundo_campo']; ?></a>
      </div>
      <!-- Versão de Desenvolvimento -->
      <div class="col-md-4 col-lg-4 text-center">
        <?php $desenvolvimento = get_field('desenvolvimento'); ?>
        <a href="<?php echo $desenvolvimento['link_versao_desenvolvimento']; ?>" class="btn btn-secondary" style="display: block;margin: 10px 4px;max-padding: .5em .6em;white-space: normal;background: #728ea0;">
          <h3 style="margin-bottom: 0px;"><?php echo $desenvolvimento['texto_versao_desenvolvimento']; ?></h3>
        </a>
        <a href="<?php echo $desenvolvimento['desenvolvimento_link_primeiro_campo']; ?>"><?php echo $desenvolvimento['desenvolvimento_texto_primeiro_campo']; ?></a><br>
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

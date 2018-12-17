<?php ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php the_title('<h2 class="entry-title">', '</h2>'); ?>
  <?php if (has_post_thumbnail()): ?>
    <div class="pull-right"><?php the_post_thumbnail('medium'); ?></div>
  <?php endif; ?>
  <div class="publicacao-info">
    <table class="table">
      <tbody>
        <!-- Referências -->
        <tr>
          <?php if( get_field('referencias') ): ?>
            <th scope="row">Referências</th>
            <td><?php the_field('referencias'); ?></td>
          <?php endif; ?>
        </tr>
        <!-- Autor -->
        <tr>
          <?php if( get_field('autor') ): ?>
            <th scope="row">Autor(es)</th>
            <td>
              <?php
                $posts = get_field('autor');
                if( $posts ): ?>
                    <?php foreach( $posts as $post ): // variable must be called $post (IMPORTANT) ?>
                        <?php setup_postdata($post); ?>
                        <?php the_title(); ?><br>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                <?php endif; ?>
            </td>
          <?php endif; ?>
        </tr>
        <!-- Download -->
        <tr>
          <?php if( get_field('download') ): ?>
            <th scope="row">Download</th>
            <td>
              <?php $downloads = get_post_meta( get_the_ID(), 'download' );
              $tipos = get_post_meta( get_the_ID(), 'tipo' );

              foreach ($downloads as $index => $download) {
                echo '<a href="' . $download . '">' . $tipos[$index] .'</a></br>';
              }
              ?>
            </td>
          <?php endif; ?>
        </tr>
        <!-- Número de Páginas -->
        <tr>
          <?php if( get_field('numero_de_paginas') ): ?>
            <th scope="row">Número de Páginas</th>
            <td><?php the_field('numero_de_paginas'); ?> páginas</td>
          <?php endif; ?>
        </tr>
      </tbody>
    </table>
  </div>
  <?php the_content(); ?>
</article>

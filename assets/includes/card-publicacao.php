<?php
// Card utilizado na página 'Documentação'
?>
<div class="col-md-12 col-lg-6" style="margin-bottom: 30px;">
  <div class="text-left">
    <div class="card">
      <div style="" class="card-header">
        <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
      </div>
      <div class="card-body">
        <div class="download">
          <?php if( get_field('download') ): ?>
            <span><b>Download</b></span><br>
            <a href="<?php the_field('download'); ?>"><?php the_field('tipo'); ?></a><br>
            <?php if( get_field('download2') ): ?>
              <a href="<?php the_field('download2'); ?>"><?php the_field('tipo2'); ?></a><br>
            <?php endif; ?>
          <?php endif; ?>
        </div>
        <div class="referencias">
          <span><b>Referência</b></span><br>
          <span class="card-text"><?php the_field('referencias'); ?></span>
        </div>
        <div class="autor">
          <?php

          $posts = get_field('autor');

          if( $posts ): ?>
            <span><b>Autor(es)</b></span><br>
            <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                <?php setup_postdata($post); ?>
                <?php the_title(); ?>
                <?php the_field('autor'); ?><br>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
          <?php endif; ?>
        </div>
        <?php if( get_field('numero_de_paginas') ): ?>
          <th scope="row">Número de Páginas</th>
          <td><?php the_field('numero_de_paginas'); ?> páginas</td>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

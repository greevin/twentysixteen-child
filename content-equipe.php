<?php ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php the_title('<h2 class="entry-title">', '</h2>'); ?>
  <?php if (has_post_thumbnail()): ?>
    <div class="pull-right"><?php the_post_thumbnail('medium'); ?></div>
  <?php endif; ?>
  <?php the_content(); ?>
  <div class="equipe-info">
    <table class="table table-sm">
      <tbody>
        <!-- Cargo -->
        <tr>
          <?php if( get_field('funcao') ): ?>
            <th scope="row">Função</th>
            <td>
              <?php
                $funcoes = get_field('funcao');
                if( $funcoes ): ?>
                  <?php the_field('funcao'); ?><br>
                <?php endif; ?>
            </td>
          <?php endif; ?>
        </tr>
        <!-- Cargo -->
        <tr>
          <?php if( get_field('vinculo') ): ?>
            <th scope="row">Vínculo</th>
            <td>
              <?php
                $vinculos = get_field('vinculo');
                if( $vinculos ): ?>
                  <?php the_field('vinculo'); ?><br>
                <?php endif; ?>
            </td>
          <?php endif; ?>
        </tr>
        <!-- E-mail -->
        <tr>
          <?php if( get_field('email') ): ?>
            <th scope="row">E-mail</th>
            <td><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></td>
          <?php endif; ?>
        </tr>
        <!-- Data de Início -->
        <tr>
          <?php if( get_field('data_de_inicio') ): ?>
              <?php
                $start_date = get_field('data_de_inicio', false, false);
                $start_date = new DateTime($start_date);
              ?>
              <th scope="row">Data de Início</th>
              <td><?php echo $start_date->format('d/m/Y'); ?></td>
          <?php endif; ?>
        </tr>
        <!-- Data de Fim -->
        <tr>
          <?php if( get_field('data_de_fim') ): ?>
              <?php
                $end_date = get_field('data_de_fim', false, false);
                $end_date = new DateTime($end_date);
              ?>
              <th scope="row">Data de Fim</th>
              <td><?php echo $end_date->format('d/m/Y'); ?></td>
          <?php endif; ?>
        </tr>
      </tbody>
    </table>
  </div>
</article>

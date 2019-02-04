<?php
// Card utilizado na página 'Equipe'
?>
<div class="col-md-3 col-lg-3">
  <div class="text-center">
    <div class="card-image">
      <?php $urlImg = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>
      <div class="circle-image fundo-azul">
        <a href="<?php the_permalink(); ?>">
          <?php if ($urlImg != false): ?>
            <div class="circle-image">
              <?php the_post_thumbnail(); ?>
            </div>
          <?php else: ?>
            <?php
            $title = get_the_title();
            $words = explode(" ", $title, 2);
            $acronym = "";

            foreach ($words as $w) {
              $acronym .= $w[0];
            }
            ?>
            <span><?php echo $acronym; ?></span>
          <?php endif ?>
        </a>
      </div>
    </div>
    <div class="card-body">
      <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
      <div class="card-cargo">
        <?php
          $cargos = get_field('funcao');
          if( $cargos ): ?>
          <?php the_field('funcao'); ?><br>
          <?php endif; 
        ?>
      </div>
    </div>
  </div>
</div>

<?php
// Cards
?>
<div class="custom-card">
  <div class="card mb-5 box-shadow">
    <!-- se o post tiver thumbnail do card -->
    <?php if( get_the_content() ): ?>
      <div class="text-center card-image-size">
        <div class="embed-responsive embed-responsive-4by3">
          <?php the_content(); ?>
        </div>
      </div>
      <!-- senao, apenas mostra o logo -->
    <?php else : ?>
      <div class="text-center card-image-size logo-center">
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
          <img style="max-width: 50%;height: auto;" src="<?php bloginfo('template_url'); ?>/assets/images/logo-transparente.png" alt="<?php the_title_attribute(); ?>">
        </a>
      </div>
    <?php endif; ?>
    <div class="card-body bg-light text-center">
      <!-- adiciona as categorias -->
      <div class="card-category">
        <?php the_terms( $post->ID, 'category', '', ' | ' ); ?>
      </div>
      <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
      <p class="card-text"><?php echo wp_trim_words(get_the_content(), 25, '...' ); ?></p>
      <p class="card-text"><a href="<?php the_permalink(); ?>" class="btn btn-link">Leia Mais »</a></p>
    </div>
  </div>
</div>

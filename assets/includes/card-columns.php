<?php
// Cards
?>
<div class="custom-card">
  <div class="card mb-4 box-shadow">
    <!-- se o post tiver thumbnail -->
    <?php if( has_post_thumbnail() ): ?>
      <div class="text-center card-image-size">
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
          <?php the_post_thumbnail(); ?>
        </a>
      </div>
      <!-- senao, apenas mostra o logo -->
      <?php else : ?>
        <div class="text-center card-image-size logo-center">
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <img style="max-width: 50%;height: auto;" src="<?php bloginfo('template_url'); ?>/assets/images/logo-transparente.png" alt="<?php the_title_attribute(); ?>">
          </a>
        </div>
    <?php endif; ?>
    <div class="card-body bg-light">
      <div class="card-category">
        <?php the_terms( $post->ID, 'category', '', ' | ' ); ?>
      </div>
      <!-- se a categoria não for Eventos -->
      <?php
        $categories = get_the_category();
        if($categories[0]->name !== 'Evento') :
      ?>
        <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
        <p class="card-text"><?php echo wp_trim_words(get_the_content(), 25, '...' ); ?></p>
        <?php else : ?>
           <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
           <p class="card-text">
             <!-- Data -->
             <?php if( get_field('data_de_inicio') ): ?>
               <?php
                 $start_date = get_field('data_de_inicio', false, false);
                 $start_date = new DateTime($start_date);

                 $end_date = get_field('data_de_fim', false, false);
                 $end_date = new DateTime($end_date);
               ?>
               <span class="card-text">Data: </span>
               <span><?php echo $start_date->format('d/m/Y'); ?></span>
               <?php if( get_field('data_de_fim') &&  $start_date->format('d/m/Y') != $end_date->format('d/m/Y')): ?>
                 <span> - <?php echo $end_date->format('d/m/Y'); ?></span>
               <?php endif; ?>
             <?php endif; ?>
             <!-- Fim da Data -->
             <br>
             <!-- Horário -->
             <?php if( get_field('horario_de_inicio') ): ?>
                <span>Horário: </span>
                <span><?php the_field('horario_de_inicio'); ?></span>
                <?php if( get_field('horario_de_fim') ): ?>
                  <span> - <?php the_field('horario_de_fim'); ?></span>
                <?php endif; ?>
             <?php endif; ?>
             <!-- Fim do Horario -->
             <br>
             <!-- Local -->
             <?php if( get_field('local') ): ?>
               <span>Local: </span>
               <span><?php the_field('local'); ?></span>
             <?php endif; ?>
             <!-- Fim do Local -->
           </p>
      <?php endif; ?>
       <p class="card-text"><a href="<?php the_permalink(); ?>" class="btn btn-link">Leia Mais »</a></p>
    </div>
  </div>
</div>

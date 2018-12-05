<?php
// Parceiros
?>

<div class="col-sm-3 col-md-15 parceiros">
  <div style="max-width: 50%;margin: 10px;">
    <a href="<?php the_field('site_parceiro'); ?>"><?php echo get_the_post_thumbnail($post->ID); ?></a>
  </div>
</div>

<?php
// Jumbotron para as páginas internas
?>
<section class="pagina-interna">
  <div class="jumbotron jumbotron-fluid text-center">
    <div class="container">
      <h2 class="display-4 jumbotron-title"><?php the_title(); ?></h2>
      <h5><?php the_field('autor') ?></h5>
    </div>
  </div>
</section>

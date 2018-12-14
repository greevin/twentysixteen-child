<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer id="colophon" role="contentinfo">
			<div>
				<?php
				  $args = array(
				    'name'      => 'configuracoes-do-rodape',
				    'post_type' => 'configuracoes_tema',
				    'post_status' => 'publish'
				  );
				  $campos_rodape_loop = new WP_Query( $args );
				  if ( $campos_rodape_loop->have_posts() ) :
				    while ( $campos_rodape_loop->have_posts() ) : $campos_rodape_loop->the_post();
				      // Seção Licença
				      $rodape_imagem = get_field('rodape_imagem');
				      $rodape_endereco_licenca = get_field('rodape_endereco_licenca');
				      $rodape_texto_licenca = get_field('rodape_texto_licenca');
				      // Seção Endereço
				      $rodape_nome_universidade = get_field('rodape_nome_universidade');
				      $rodape_endereco_universidade = get_field('rodape_endereco_universidade');
				      $rodape_telefone_universidade = get_field('rodape_telefone_universidade');
				      $rodape_fale_conosco = get_field('rodape_fale_conosco');
				      // Seção Mapa
				      $rodape_mapa = get_field('rodape_mapa');
				?>

        <div class="container">
          <div class="row">
            <!-- licença -->
            <div class="col-lg-3 col-md-3 licenca">
              <div class="content">
                <h6>LICENÇA</h6>
                <a href="<?php echo $rodape_endereco_licenca; ?>" rel="license"><img alt="Licença Creative Commons" src="<?php echo $rodape_imagem; ?>" style="border-width:0"></a>
                <p><?php echo $rodape_texto_licenca; ?></p>
              </div>
            </div>
            <!-- endereco -->
            <div class="col-lg-5 col-md-5 endereco">
              <div class="content">
                <h6>ENDEREÇO</h6>
                <?php echo $rodape_nome_universidade; ?>
                <div class="endereco-universidade">
                  <div class="row">
                    <div class="col-md-11 info">
                      <small><b>Endereço</b></small>
                      <p><?php echo $rodape_endereco_universidade; ?></p>
                    </div>
                  </div>
                </div>
                <div class="telefone">
                  <div class="row">
                    <div class="col-md-11 info">
                      <small><b>Telefone</b></small>
                      <p><?php echo $rodape_telefone_universidade; ?></p>
                    </div>
                  </div>
                </div>
                <div class="fale-conosco">
                  <div class="row">
                    <div class="col-md-11 info">
                      <small><b>Fale Conosco</b></small>
                      <p class><a href="mailto:<?php echo $rodape_fale_conosco; ?>"><?php echo $rodape_fale_conosco; ?></a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- mapa -->
            <div class="col-lg-4 col-md-4 mapa">
              <h6>MAPA</h6>
              <div class="title-divider"></div>
              <div class="embed-responsive embed-responsive-4by3">
                <iframe class="embed-responsive-item" src="<?php echo $rodape_mapa; ?>"></iframe>
              </div>
            </div>
          </div>
        </div>

        <?php
          endwhile;
            wp_reset_postdata();
          endif;
        ?>
			</div><!-- .site-info -->
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>

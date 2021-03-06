<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

</div><!-- #main .wrapper -->
<footer id="colophon" role="contentinfo">
  <ul class="infos">
    <li class="ufrgs">
      <a href="http://www.ufrgs.br">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/ufgrs.png">
      </a>
    </li>

    <li>
      <ul class="nucleo">
        <li><h3>Antropologia da Propriedade Intelectual Departamento de Antropologia<br></h3></li>
        <li>Instituto de Filosofia e Ciências Humanas</li>
        <li>Prédio 43311 A – Sala 219</li>
        <li>Campus Agronomia</li>
        <li>Av. Bento Gonçalves 9500 - Porto Alegre - RS, 91501-970 </li>
        <li>Telefone: (51) 3308-6865</li>
      </ul></li>
      <li>
        <ul class="contact">
          <li>
            <a href="<?php bloginfo('rss2_url'); ?>">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/feed.png">
            </a>
          </li>
          <li>
            <b>e-mail institucional:</b><br>
             <a href="mailto:contato@antropi.org">
               contato@antropi.org
            </a>
          </li>
          <li>
            <b>assine nossa lista de discussão</b><br>
            antropi@ufrgs-listas.br
          </li>
        </ul>
      </li>
  </ul>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
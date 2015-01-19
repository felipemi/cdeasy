<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage CdEasy
 * @since CdEasy
 */
?>
</div>
</div>
<footer id="footer">
    <div id="colophon">
        <div class="center">
            <div id="site-info">
                <div class="social-medias">
                    <div class="amigos"> 
                        <h3>Amigos</h3>
                        <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fcdeasycursosetreinamentos%3Ffref%3Dts&amp;width=450&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; background: #fff; overflow:hidden; width:450px; height:290px; margin-left: 10px;" allowTransparency="true"></iframe>
                    </div>
                    <div class="na-rede">
                        <h3>Na Rede</h3>
                        <div class="curtir">
                            <span class="ico-facebook"></span>
                            <span>Vamos Curtir? <a href="https://www.facebook.com/cdeasycursosetreinamentos?fref=ts" target="_blank" title="<?php _e('Cd-Easy Cursos e Treinamentos no Facebook', 'cdeasy') ?>">Clique</a></span>
                        </div>
                        <!--<div class="twitter">
                            <span class="ico-twitter"></span>
                            <span>Siga-nos no <a href="http://www.twitter.com.br" target="_blank" title="<?php _e('Siga Cd-Easy Cursos e Treinamentos no Twitter', 'cdeasy') ?>">Twitter</a></span>
                        </div>!-->
                    </div>
                </div>
            </div>
            <div class="desenvolvido">
                <p>Desenvolvido por:</p>
                <span class="generator-link">
                    <a href="http://www.stylusgrafy.com.br" title="<?php _e('StylusGrafy Marketing e Propaganda', 'cdeasy') ?>" rel="generator">
                        <img src="<?= bloginfo('template_url') ?>/img/icon-stylusgrafy-marketing-propaganda.png" alt="Logo StylusGrafy. Marketing e Propaganda" width="95"/>
                    </a>
                </span>
            </div>
        </div><!-- #site-info -->
    </div>
</footer><!-- #footer -->
</div><!-- #main -->
</div>
<div id="mascara"></div>
<?php wp_footer(); ?>

</body>
</html>
<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pascal
 */

?>

  <footer id="colophon" class="site-footer">
    <div class="site-info">
      Josh Green Design is my personal  <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'pascal' ) ); ?>">
        <?php printf( esc_html__( '%s', 'pascal' ), 'WordPress' ); ?></a> website, using a theme named <?php
        /* translators: 1: Theme name, 2: Theme author. */
        printf( esc_html__( '%1$s which is built using %2$s.', 'pascal' ), 'Pascal,', '<a href="http://underscores.me/">Underscores.me</a>' );
        ?>
    </div><!-- .site-info -->
  </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

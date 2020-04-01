<?php

// =============================================================================
// VIEWS/ICON/TEMPLATE-BLANK-5.PHP (No Container | Header, No Footer)
// -----------------------------------------------------------------------------
// A blank page for creating unique layouts.
// =============================================================================

get_header();

?>

  <div class="x-main full" role="main">

    <?php while ( have_posts() ) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-wrap">
          <?php x_get_view( 'global', '_content', 'the-content' ); ?>
        </div>
      </article>

    <?php endwhile; ?>

  </div>

  <?php x_get_view( 'icon', '_template-blank-sidebar' ); ?>

<?php

if ( apply_filters( 'x_legacy_cranium_footers', true ) ) {
  x_get_view( 'global', '_footer' );
} else {
  get_footer();
}

?>

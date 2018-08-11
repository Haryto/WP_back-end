<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php

                get_template_part( 'template-parts/post/content' );
                
            ?>

            <?php
            $movie = wc_get_product($post->ID);
            global  $woocommerce;
            ?>
            <div class="movie_buy">
                <span class="price"><?= $movie->get_price() . get_woocommerce_currency_symbol() ?> </span>
                <form action="" method="POST">
                    <input name="add-to-cart" type="hidden" value="<?= $post->ID ?>" />
                    <input name="submit" type="submit" value="Buy" />
                </form>
            </div>

            <?php

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
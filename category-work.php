<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<main class="site-main archive-main" id="main">
    <div class="wrapper" id="archive-wrapper">
	    <div class="container-fluid">
		    <div class="row">
			    <div class="col-md">
                    <div class="row">
                        <div class="col-md-auto logo-container">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="194" viewBox="0 24 194 248" role="img" aria-label="9th & Irving">
                                    <title>9th & Irving</title>
                                    <g id="Logo" data-name="Logo" transform="translate(-677 -128)">
                                        <g id="Subheading" transform="translate(740 128)">
                                        <text id="_9th" data-name="9th" transform="translate(0 97)" fill="#1a1a1a" font-size="90" font-family="PlayfairDisplay-BoldItalic, Playfair Display" font-weight="700" font-style="italic" letter-spacing="-0.06em"><tspan x="0" y="0">9th</tspan></text>
                                        </g>
                                        <text id="_" data-name="&amp;" transform="translate(677 303)" fill="#1a1a1a" font-size="90" font-family="PlayfairDisplay-BoldItalic, Playfair Display" font-weight="700" font-style="italic" letter-spacing="-0.06em"><tspan x="0" y="0">&amp;</tspan></text>
                                        <text id="Irv_ing" data-name="Irv
                                    ing" transform="translate(750 303)" fill="#1a1a1a" font-size="90" font-family="PlayfairDisplay-BoldItalic, Playfair Display" font-weight="700" font-style="italic" letter-spacing="-0.06em"><tspan x="0" y="0">I</tspan><tspan y="0" letter-spacing="-0.075em">rv</tspan><tspan x="0" y="74">ing</tspan></text>
                                    </g>
                                </svg>
                            </a>

                            <div class="archive-title">
                                <?php the_archive_title( '<h1>/', '</h1>' ); ?>
                            </div>
                        </div>
                        <div class="col-md right-content archive-work">
                            <?php while ( have_posts() ) : the_post(); ?>

                                <!-- POST -->
                                <!-- POST -->
                            <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                                <?php
                                        echo '<a class="blog-thumb-container" href="' . get_permalink( $_post->ID ) . '" title="' . esc_attr( $_post->post_title ) . '">';
                                        echo get_the_post_thumbnail( $post->ID, 'large' );
                                        echo '</a>';
                                    ?>
                            </article><!-- #post-## -->

                            <?php endwhile; ?>

                            <?php understrap_pagination(); ?>

                        </div>
                    </div>
                </div>
            </div><!-- .row -->
        </div><!-- #content -->
    </div><!-- wrapper -->
</main><!-- #main -->

<?php get_footer(); ?>

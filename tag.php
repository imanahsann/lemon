<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<main class="site-main archive-main tag" id="main">
    <div class="wrapper" id="archive-wrapper">
	    <div class="container-fluid">
		    <div class="row">
			    <div class="col-md">
                    <div class="row">
                        <div class="col-md-auto logo-container">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="194" viewBox="0 24 194 248">
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
                                <h1>/blog</h1>
                                <?php the_archive_title( '<h1 class="tag-title"><span>#', '</span></h1>' ); ?>
                            </div>
                        </div>
                        <div class="col-md right-content archive-content">
                            <?php while ( have_posts() ) : the_post(); ?>

                                <!-- POST -->
                                <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

                                    <div class="blog-thumb-container">
                                        <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
                                    </div>

                                    <header class="entry-header">

                                        <?php
                                        the_title(
                                            sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
                                            '</a></h2>'
                                        );
                                        ?>

                                    </header><!-- .entry-header -->

                                    <div class="entry-content">

                                        <?php the_excerpt(); ?>

                                        <?php
                                        wp_link_pages(
                                            array(
                                                'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
                                                'after'  => '</div>',
                                            )
                                        );

                                        ?>


                                    </div><!-- .entry-content -->

                                    <footer class="entry-footer">

                                    <?php

                                        $tags_list = get_the_tag_list( '', esc_html__( ' ', 'understrap' ) );

                                        if ( $tags_list ) {
                                            /* translators: %s: Tags of current post */
                                            printf( '<div class="tags-links">' . esc_html__( '%s', 'understrap' ) . '</div>', $tags_list ); // WPCS: XSS OK.
                                        }

                                    ?>

                                    </footer><!-- .entry-footer -->

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

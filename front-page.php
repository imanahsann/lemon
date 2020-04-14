<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<main class="site-main" id="main">

    <div class="wrapper home-blog">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md">
                    <div class="row">
                        <!-- Logo -->
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
                        </div>
                        <div class="col-md right-content archive-content">

                            <!-- LOOP THROUGH TWO RECENT BLOG POSTS -->
                            <?php $query = new WP_Query( array( 'cat' => 9, 'posts_per_page' => 2 ) ); ?>
                            <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

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

                            <?php else : ?>

                                <?php get_template_part( 'loop-templates/content', 'none' ); ?>

                            <?php endif; ?>

                            <!-- BLOG LINK -->
                            <div class="more">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>/?page_id=10/">More Blog ></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper home-work">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md">
                    <div class="recent-work">
                        <div class="recent-work-content ">
                            <h3>Work</h3>
                            <!-- LOOP THROUGH TWO RECENT WORK POSTS -->
                            <?php $query = new WP_Query( array( 'cat' => 13, 'posts_per_page' => 2 ) ); ?>
                            <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

                                <!-- POST -->
                                <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

                                    <div class="work-info">
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

                                    </div>

                                    <div class="blog-thumb-container">
                                        <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
                                    </div>

                                </article><!-- #post-## -->

                            <?php endwhile; ?>

                            <?php else : ?>

                                <?php get_template_part( 'loop-templates/content', 'none' ); ?>

                            <?php endif; ?>

                            <!-- WORK LINK -->
                            <div class="more">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>/?page_id=10/">More Work ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper home-about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md">
                    <div class="home-about">
                        <h3>About</h3>
                        <!-- INCLUDE ABOUT PAGE CONTENT -->
                        <?php $query = new WP_Query( array( 'page_id' => 7 ) ); ?>
                        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>


                        <div class="about-content">

                            <?php the_content(); ?>

                        </div>

                        <?php endwhile; ?>

                        <?php else : ?>

                            <?php get_template_part( 'loop-templates/content', 'none' ); ?>

                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main><!-- #main -->

<?php get_footer(); ?>

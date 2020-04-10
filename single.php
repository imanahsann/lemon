<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check and opens the primary div -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main page single" id="main">

                <div class="top">
                    <!-- Logo -->
                    <div class="logo-container">
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

                    <?php while ( have_posts() ) : the_post(); ?>

                    <div class="entry-top">
                        <div class="page-title">
                            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                        </div>

                    </div>

                </div>

                <div class="page-content">

<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
                        <?php the_content(); ?>

                        <?php endwhile; ?>

                </div>

			</main><!-- #main -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- wrapper -->

<?php get_footer(); ?>

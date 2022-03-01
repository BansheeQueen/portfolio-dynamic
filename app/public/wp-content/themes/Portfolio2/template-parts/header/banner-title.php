<?php
/**
 * Displays title banner 
 *
 * 
 *
 * @package MyPortfolio
 * @since MyPortfolio 1.0
 */
 ?>

<section class="banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="parallax-scene" data-invert-x="false" data-invert-y="false" data-friction-x="0.5"
                        data-friction-y="0.5" data-relative-input="true" data-clip-relative-input="true"
                        data-hover-only="true">
                        <div class="code" data-depth="0.2"><code id="code-1"><?php esc_html_e( 'border-radius: 20px', 'myportfolio' );?></code></div>
                        <div class="code" data-depth="0.3"><code id="code-2"><?php esc_html_e( '@function() { nav.classList.add = "active"
                                };', 'myportfolio' );?></code></div>
                        <div class="code" data-depth="0.6"><code id="code-3"><?php esc_html_e( '<div class="nav"></div>', 'myportfolio' );?></code></div>
                        <div class="code" data-depth="0.8"><code id="code-4"><?php esc_html_e( '$(".banner").on("scroll", function()
                                {});', 'myportfolio' );?></code></div>
                        <div class="code" data-depth="0.4"><code id="code-5"><?php esc_html_e( 'echo wp_kses_post( get_theme_mod
                                ());', 'myportfolio' );?></code></div>
                        <div class="code" data-depth="0.5"><code id="code-6"><?php esc_html_e( 'display: inline-flex;', 'myportfolio' );?></code></div>
                    </div>
                    <div class="banner-title">
                        <h1><?php esc_html_e( 'Front-end', 'myportfolio' );?></h1>
                        <h2><?php esc_html_e( 'developer', 'myportfolio' );?></h2>
                        <h3><?php esc_html_e( 'Katarzyna Soczka', 'myportfolio' );?></h3>

                                


                        <a href="#" download><button class="btn btn-primary" type="button"><?php esc_html_e( 'Get CV', 'myportfolio' );?></button></a>
                    </div>
                </div>
            </div>
        </div>
        <img src="<?php echo get_template_directory_uri()?>/assets/images/waves.svg" class="waves">

    </section>

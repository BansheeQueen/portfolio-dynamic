<?php
/**
 * The Header file.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MyPortfolio
 * @since MyPortfolio 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes( ); ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front End Developer - Katarzyna Soczka</title>
    <?php wp_head();?>
   </head>

<body <?php body_class(); ?>>
    <header class="top-navigation" id="#home">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-banner-title"></div>
                    <?php get_template_part( 'template-parts/header/site-nav' ); ?>
            </div>
    </header>

    <?php get_template_part( 'template-parts/header/banner-title' ); ?>


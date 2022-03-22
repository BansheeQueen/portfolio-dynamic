<?php
/**
 * Displays single portfolio type post
 *
 * 
 *
 * @package MyPortfolio
 * @since MyPortfolio 1.0
 */
 ?>

<?php
  get_header()
  ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
          <div class="container">
          <div class="row position-relative">
          <div class="col-lg-4 overflow-hidden portfolio-sidebar d-flex flex-column justify-content-center">

            <h2><?php the_title()?></h2>
          
<!-- Portfolio tags -->
<?php $tag_list = get_the_term_list( $post->ID, 'portfolio_tag', '', '', '' );
?>
<?php if ( $cat_list && $tag_list ) : ?>
		<span class="meta-sep"> | </span>
	<?php endif; ?>

	<?php if ( $tag_list ) : ?>
	<span class="tag-links d-flex justify-content-center align-items-center flex-wrap">
        <div class="features entry-utility-prep entry-utility-prep-tag-links"><?php _e( 'Features ', 'myportfolio' ); ?></div><?php echo $tag_list; ?></span>
	<?php endif; ?>
</div>
        <?php 
         // ARE THERE any posts in the db?
         if ( have_posts(  )) {
             while ( have_posts(  ) ) {
                 the_post();

                 
                 ?>
            <div class="col-lg-8 overflow-hidden post-content">
              <article id="post-<?php the_ID()?>" <?php post_class(); ?>>
              <?php if( has_post_thumbnail() ) {
                   the_post_thumbnail(
                         'large',
                         array(
                             'class' => 'img-fluid'
                         )
                         
                    );
               } 
               ?>
                <?php
                        the_content();
                    ?>
                </article>
            </div>

        <?php
             }
        } else {
            get_template_part( 'template-parts/content', 'none');
        }
        ?>
        </main><!-- .site-main -->
    </div><!-- .content-area -->

<?php get_footer()?>
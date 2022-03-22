<?php 
/** 
 * Portfolio Excerpt Template
 * 
 * @package MyPortfolio
 * @since MyPortfolio 1.0
 */
?>


<div class="project-container" id="post-<?php the_ID()?>">
         <?php the_post_thumbnail('large');?>
    <div class="overlay">
        <h3><?php echo the_title(); ?></h3>
            <p class="desc"> <?php force_balance_tags( the_excerpt(  ) ); ?></p>
                                            <a href="<?php the_permalink(  ); ?>" class="more"><?php esc_html_e( 'Read more', 'myportfolio' ); ?></a>
                                            <!-- <div class="tags">
                                                <p class="tag">jQuery</p>
                                                <p class="tag">Bootstrap</p>
                                            </div> -->
                                            
            </div>
                                        
     </div>
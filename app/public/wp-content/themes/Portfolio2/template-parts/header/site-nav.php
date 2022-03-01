<?php
/**
 * Displays site navigation
 *
 * 
 *
 * @package MyPortfolio
 * @since MyPortfolio 1.0
 */
?>
<nav class="nav-menu" id="home">
                    <ul class="top-menu navigation list-unstyled d-flex flex-row justify-content-end">
                    <?php  
                    
                    
                        wp_nav_menu(
										array(
                                            'menu'      => '',
											'container'  => '',
                                            'menu_class' => 'top-menu navigation list-unstyled d-flex flex-row justify-content-end',
											'theme_location' => 'primary',
                                            'depth'     => 1,
                                            'item_spacing'         => 'preserve',
                                            'items_wrap' => '%3$s',
										)
									);
                        ?>
                        <div class="indicator"></div>
                        </ul>
                                </nav>

                    <!-- Buton for mobile menu -->
                    <button type="button" class="btn navbar-toggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
            <div class="mobile-menu">
                <nav class="menu-box">
                    <ul class="navigation clearfix list-unstyled justify-content-center align-items-center">

                    </ul>
                </nav>
            </div>
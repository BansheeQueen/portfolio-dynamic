  <?php
  get_header()
  ?>
                    <section class="about" id="about-me">
                        <div class="container">
                            <div class="row">
                            <div class="col-md-10 offset-md-1">
                        <h2>About me
                            <div class="underline"></div>
                        </div>
                        </h2>
                    </div>
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-lg-7 col-md-5">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores distinctio error
                                    quae
                                    temporibus iusto reprehenderit, magnam velit fugit sint aliquid rerum est,
                                    doloremqu
                                    autem. Eveniet facere commodi accusamus et modi! Lorem ipsum dolor, sit amet
                                    consectetur adipisicing elit. Dolor dignissimos omnis facere tempora praesentium,
                                    veritatis corrupti recusandae asperiores consequatur? Quia ad in dicta, quaerat
                                    culpa blanditiis dolorem cumque ullam consequatur?</p>
                            </div>
                            <div class="col-lg-3 col-md-5">
                                <div class="picture-container">
                                    <div class="picture-bg">
                                        <img src="assets/images/photo-about-me.png" alt="About me picture"
                                            class="about-me-picture">
                                    </div>
                                    <img src="/assets/images/blob.svg" alt="Blob" class="blob">
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    </section>
         
                    <section class="skills" id="skills">
                        <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <h2>Skills
                                    <div class="underline"></div>
                                </h2>

                                </div></div>

                                <div class="row">
                                    <div class="col-md-10 offset-md-1 d-flex justify-content-center flex-wrap skills-container">
                                    <div class="skill-container">
                                        <i class="fab fa-html5"></i>
                                        <p>HTML5</p>
                                    </div>

                                    <div class="skill-container">
                                        <i class="fab fa-css3-alt"></i>
                                        <p>CSS3</p>
                                    </div>

                                    <div class="skill-container">
                                        <i class="fab fa-js-square"></i>
                                        <p>JavaScript</p>
                                    </div>

                                    <div class="skill-container">
                                        <i class="fab fa-wordpress"></i>
                                        <p>Wordrpess</p>
                                    </div>

                                    <div class="skill-container">
                                        <i class="fab fa-bootstrap"></i>
                                        <p>Bootstrap 4</p>
                                    </div>
                                </div>
                    </section>

                    <section class="portfolio" id="portfolio">
                        <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <h2>Portfolio
                                    <div class="underline"></div>
                                </h2>
                                </div>
                                </div>

                                <div class="row">
                                <div class="col-md-8 offset-md-2 projects-container d-flex justify-content-center flex-wrap">

                                    
                                    <?php $loop = new WP_Query( array( 'post_type' => 'portfolio', 'posts_per_page' => 10 ) ); 

                                    while ( $loop->have_posts() ) : $loop->the_post();

                                    get_template_part( 'template-parts/portfolio-post-type/portfolio-content-excerpt' ); 
                                   
                                    ?>
                                   <?php endwhile; ?>
                                   

                                </div>

                                </div>   

                            </div>
                        </div>
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/waves.svg" class="waves">
            </section>
  
    <?php get_footer()?>

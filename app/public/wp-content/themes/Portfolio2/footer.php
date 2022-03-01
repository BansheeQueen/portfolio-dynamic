<footer id="contact">
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 d-flex flex-md-column justify-content-around align-items-end social">
                <a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a>
                <a href="#" title="Github"><i class="fab fa-github"></i></a>

            </div>
            
            <div class="col-md-10 d-flex flex-wrap justify-content-center contact">
                <h3>Contact me if you have any questions</h3>
                <form action="" class="contact-form d-inline-flex flex-wrap justify-content-center">
                    <label for="email"><i class="fa-solid fa-at"></i></label>
                    <input type="text" id="email" name="email" placeholder="Type your email adress">
                    <textarea placeholder="Write a message..."></textarea>
                    <button class="btn btn-secondary submit" type="submit" title="Submit">
                        <i class="fa-solid fa-envelope"></i>
                    </button>
                        
                </form>
            </div>
        </div>git 
        <div class="row">
        <div class="col-xs-12 copyright"><?php echo wp_kses_post( get_theme_mod( 'footer_copyright', '&copy; Katarzyna Soczka ' ) ); echo date('Y'); ?></div>
    </div>
        </div>
</footer>
<?php wp_footer() ?>
</body>

</html>
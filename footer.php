<footer class="site-footer" role="contentinfo">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-4 mb-5">
                <h3>About Us</h3>
                <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. .</p>
                <ul class="list-unstyled footer-link d-flex footer-social">
                    <li><a href="#" class="p-2"><span class="fa fa-twitter"></span></a></li>
                    <li><a href="#" class="p-2"><span class="fa fa-facebook"></span></a></li>
                    <li><a href="#" class="p-2"><span class="fa fa-linkedin"></span></a></li>
                    <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
                </ul>

            </div>
            <div class="col-md-5 mb-5 pl-md-5">
                <h3>Contact Info</h3>
                <ul class="list-unstyled footer-link">
                    <li class="d-block">
                        <span class="d-block">Address:</span>
                        <span >34 Street Name, City Name Here, United States</span></li>
                    <li class="d-block"><span class="d-block">Telephone:</span><span >+1 242 4942 290</span></li>
                    <li class="d-block"><span class="d-block">Email:</span><span >info@yourdomain.com</span></li>
                </ul>
            </div>

            <div class="col-md-3 mb-5">
                <h3>Quick Links</h3>
	            <?php wp_nav_menu(
		            array(
			            'theme_location' => 'footer-menu',
			            'menu_class' => "list-unstyled footer-link",
			            'container' => "ul",
			            'container_class' => "ulClass",
		            )
	            );?>

            </div>
            <div class="col-md-3">

            </div>
        </div>
        <div class="row">
            <div class="col-12 text-md-center text-left">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made
                    with <i class="fa fa-heart" aria-hidden="true"></i> by <a style="display:inline-block; padding:0" href="https://colorlib.com" target="_blank"
                                                                              class="text-primary">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
      <!-- Newsletter Start -->
        <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
          <div class="row justify-content-center">
            <div class="col-lg-10 p-1">
              <div class="text-center p-1">
                <div class="bg-white border text-center p-5" id="Response-Server-Newsletter">
                  <?php
                    if(newsletterSubscriberDataCache::email() == ''){
                  ?>
                    <h4 class="mb-4">
                    	Subscribe Our <span class="text-primary text-uppercase">Newsletter</span>
                    </h4>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                    	<form id="Form-Newsletter">
                        <input type="hidden" name="google-response-token" id="google-response-token" class="form-control" required readonly="readonly">
  	                    <input type="email" name="Email" class="form-control w-100 py-3 ps-4 pe-5" placeholder="Enter your email">
  	                    <button type="button" id="Btn-Add-Subscribe-Newsletter" class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">
  	                    	Submit
  	                    </button>
                    	</form>
                    </div>
                  <?php
                    }else{
                  ?>
                    <h4 class="mb-4">
                    <span class="text-primary text-uppercase">THANKS FOR SIGNING UP</span>.
                </h4>
                  <?php
                    }
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      <!-- Newsletter Start -->
        
      <!-- Footer Start -->
      	<div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
          <div class="container pb-5">
            <div class="row g-5">
              <div class="col-md-6 col-lg-4">
                <!-- <div class="bg-primary rounded p-4">
                  <a href="#"><h1 class="text-white text-uppercase mb-3"></h1></a>
                  <p class="text-white mb-0">
									</p>
                </div> -->
              </div>
              <div class="col-md-6 col-lg-3">
                <h6 class="section-title text-start text-primary text-uppercase mb-4">Contact</h6>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-2"></i><?php echo vGeneralDataSystem::address(); ?></p>
                <p class="mb-2"><i class="fa fa-phone-alt me-2"></i><?php echo vGeneralDataSystem::telephone(); ?></p>
                <p class="mb-2"><i class="fa fa-envelope me-2"></i><?php echo vGeneralDataSystem::email("Info"); ?></p>
                <div class="d-flex pt-2">
                  <!-- <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                  <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                  <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                  <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a> -->
                </div>
              </div>
              <div class="col-lg-5 col-md-12">
                <div class="row gy-5 g-4">
                  <div class="col-md-6">
                    <h6 class="section-title text-start text-primary text-uppercase mb-4">MENU</h6>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                  </div>
                  <div class="col-md-6">
                    <!-- <h6 class="section-title text-start text-primary text-uppercase mb-4">Services</h6> -->
                    <!-- <a class="btn btn-link" href=""></a> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="copyright">
              <!-- <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                  &copy; <a class="border-bottom" href="#">EmbajadoresMayas</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                  <div class="footer-menu">
                    <a href="">Home</a>
                    <a href="">Cookies</a>
                    <a href="">Help</a>
                    <a href="">FQAs</a>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
      	</div>
      <!-- Footer End -->

      <!-- Back to Top -->
      <a href="#" class="btn btn-lg btn-primary back-to-top">
        <i class="bi bi-arrow-up"></i>
      </a>	  
	  </div>  
	  <!-- JavaScript Libraries -->
	  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
	  <script src="<?php echo constant('URL'); ?>public/FrontEnd/templeate/lib/wow/wow.min.js"></script>
	  <script src="<?php echo constant('URL'); ?>public/FrontEnd/templeate/lib/easing/easing.min.js"></script>
	  <script src="<?php echo constant('URL'); ?>public/FrontEnd/templeate/lib/waypoints/waypoints.min.js"></script>
	  <script src="<?php echo constant('URL'); ?>public/FrontEnd/templeate/lib/counterup/counterup.min.js"></script>
	  <script src="<?php echo constant('URL'); ?>public/FrontEnd/templeate/lib/owlcarousel/owl.carousel.min.js"></script>
	  <script src="<?php echo constant('URL'); ?>public/FrontEnd/templeate/lib/tempusdominus/js/moment.min.js"></script>
	  <script src="<?php echo constant('URL'); ?>public/FrontEnd/templeate/lib/tempusdominus/js/moment-timezone.min.js"></script>
	  <script src="<?php echo constant('URL'); ?>public/FrontEnd/templeate/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

	  <!-- Template Javascript -->
	  <script src="<?php echo constant('URL'); ?>public/FrontEnd/templeate/js/main.js"></script>

    <script></script>

	  <?php
	    	#	LLAMAMOS LOS SCRIPTS QUE SE VAN A OCUPAR EN EL MODULO ACTIVO	
			switch (@$this->ScriptsJS) {
				#	MODULO Home
					case 'Home':
            include_once('view/WEB/home/js/scripts-list-presentation-tourist-areas-card.php');
					break;		

        # MODULO Search
          case 'Search':
            include_once('view/WEB/search/js/scripts-list-plans-card.php');
            include_once('view/WEB/search/js/scripts-view-plan-rules-modal.php');
          break;  

				default:
				    echo "";
			}	

      # SCRIPT QUE SI O SI SE TIENEN QUE CARGAR
      include_once('view/WEB/contact/js/scripts-form-register-subscriber-newsletter.php');
      include_once('view/WEB/contact/js/scripts-recaptcha-subscriber-newsletter.php');    	
	  ?>

	</body>
</html>
<?php
	include_once('static/templeate/start-template.php');
  include_once('static/templeate/landscape_menu.php');
?>

  <!-- Page Header Start -->
  <div class="container-fluid page-header mb-5 p-0" style="background-image: url(<?php echo constant('URL'); ?>/public/FrontEnd/templeate/img/carousel-1.jpg);">
    <div class="container-fluid page-header-inner py-5">
      <div class="container text-center pb-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Contact</h1>
      </div>
    </div>
  </div>
  <!-- Page Header End -->

  <!-- Contact Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title text-center text-primary text-uppercase">Contact Us</h6>
        <h1 class="mb-5"><span class="text-primary text-uppercase">Contact</span> For Any Query</h1>
      </div>
      <div class="row g-4">
        <div class="col-12">
          <div class="row gy-4">
            <div class="col-md-4">
              <h6 class="section-title text-start text-primary text-uppercase">Booking</h6>
              <p><i class="fa fa-envelope-open text-primary me-2"></i><?php echo vGeneralDataSystem::email("Booking"); ?></p>
            </div>
            <div class="col-md-4">
              <h6 class="section-title text-start text-primary text-uppercase">General</h6>
              <p><i class="fa fa-envelope-open text-primary me-2"></i><?php echo vGeneralDataSystem::email("Info"); ?></p>
            </div>
            <div class="col-md-4">
              <h6 class="section-title text-start text-primary text-uppercase">Technical</h6>
              <p><i class="fa fa-envelope-open text-primary me-2"></i><?php echo vGeneralDataSystem::email("Tech"); ?></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
          <iframe class="position-relative rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59940.65677233824!2d-88.95628372104993!3d20.121901786644536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f57301810bae3db%3A0x82d716013f0fcb9d!2sPeto%2C%20Yucatan!5e0!3m2!1sen!2smx!4v1669254165587!5m2!1sen!2smx" frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-md-6">
          <div class="wow fadeInUp" data-wow-delay="0.2s">
            <form>
              <div class="row g-3">
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                    <label for="name">Your Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                    <label for="email">Your Email</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                    <label for="subject">Subject</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                    <label for="message">Message</label>
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact End -->

<?php
    include_once('static/templeate/template-ends.php');
?>
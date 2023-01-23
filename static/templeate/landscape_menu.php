<!-- Header Start -->
<div class="container-fluid bg-dark px-0">
  <div class="row gx-0">
    <div class="col-lg-3 bg-dark d-none d-lg-block">
      <a href="<?php echo constant('URL'); ?>" class="navbar-brand w-100 h-100 d-flex align-items-center justify-content-center">
        <img src="<?php echo constant('URL'); ?>public/FrontEnd/templeate/corporate/logo.png" alt="Se muestra el logo de Mayan Tourist Ambassadors" class="col-10">
      </a>
    </div>
    <div class="col-lg-9">
      <div class="row gx-0 bg-white d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
          <div class="h-100 d-inline-flex align-items-center py-2 me-4">
            <i class="fa fa-envelope text-primary me-2"></i>
            <p class="mb-0"><?php echo vGeneralDataSystem::email("Info"); ?></p>
          </div>
          <div class="h-100 d-inline-flex align-items-center py-2">
            <i class="fa fa-phone-alt text-primary me-2"></i>
            <p class="mb-0"><?php  echo vGeneralDataSystem::telephone(); ?></p>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
        <a href="<?php echo constant('URL'); ?>" class="navbar-brand d-block d-lg-none">
          <h1 class="m-0 text-primary text-uppercase" style="font-size: 4vw;">Mayan Tourist Ambassadors</h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
          <div class="navbar-nav mr-auto py-0">
            <a href="<?php echo constant('URL'); ?>" class="nav-item nav-link active">Home</a>
            <a href="<?php echo constant('URL').'Contact'; ?>" class="nav-item nav-link">Contact</a>
          </div>
        </div>
      </nav>
    </div>
  </div>
</div>
<!-- Header End -->
<?php
	include_once('static/templeate/start-template.php');
  include_once('static/templeate/landscape_menu.php');
?>
    <!-- GALERIA DEL PLAN TURISTICO -->
    <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="<?php echo constant('URL'); ?>public/FrontEnd/templeate/img/carousel-1.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Luxury Living</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">Discover A Brand Luxurious Hotel</h1>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Our Rooms</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book A Room</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="<?php echo constant('URL'); ?>public/FrontEnd/templeate/img/carousel-2.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Luxury Living</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">Discover A Brand Luxurious Hotel</h1>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Our Rooms</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book A Room</a>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

            </div>
        </div>
    <!-- Carousel End -->

    <!-- INFO PLAN Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row">

                    <div class="col-md-8">
                        <div class="col-12">
                            <div class="card mt-2 mb-2 border-0">
                                <div class="card-body">

                                    <div class="row mt-2 mb-2 mr-2 ml-2">
                                        <div class="col-8">
                                            <div class="row">

                                                <div class="col-12">
                                                    <h1 class="h3">
                                                        <span class="text-primary">
                                                            <i class="bi bi-bookmark-star"></i>
                                                        </span> 
                                                        NOMBRE DEL PLAN
                                                    </h1>   
                                                </div>                                                    

                                                <div class="col-6">
                                                    <p class="text-dark"><i class="bi bi-geo"></i> Punto de partida</p>
                                                </div>

                                                <div class="col-6 text-primary ">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>  
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-4 text-left">

                                            <button type="button" class="btn btn-light text-center" title="Like">
                                                <i class="bi bi-heart"></i>
                                            </button>

                                            <button type="button" class="btn btn-light text-center" title="My list">
                                                <i class="bi bi-list-task"></i>
                                            </button>

                                            <button type="button" class="btn btn-light text-center" title="Qualify">
                                                <i class="bi bi-star-fill"></i>
                                            </button>

                                            <button type="button" class="btn btn-light text-center" title="Help">
                                                <i class="bi bi-question-octagon"></i>
                                            </button>

                                        </div>       
                                    </div>

                                    <p class="text-muted">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </p>

                                </div>
                            </div> 
                        </div>                    
                    </div>

                    <div class="col-md-4">
                        <div class="col-12">
                            <div class="card mt-2 mb-2 border-0">
                                <div class="card-body">
                                    <div class="row mt-2 mb-2 mr-2 ml-2">
                                        <div class="col-12">
                                            <div class="row">

                                                <div class="col-12">
                                                    <h1 class="h5 text-left  mt-2 mb-2 mr-2 ml-2" id="Rules">
                                                        <span class="text-dark">
                                                            <i class="bi bi-exclamation-circle"></i>
                                                        </span> 
                                                        REGLAS DEL PLAN
                                                    </h1>   
                                                </div>                                                    

                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">

                                                <div class="col-12">
                                                    <p class="text-left mt-4 mb-4 mr-4 ml-4">
                                                        <span class="text-dark">
                                                            <i class="bi bi-caret-right"></i>
                                                        </span> 
                                                        Lorem Ipsum is simply dummy
                                                    </p> 
                                                    <p class="text-left mt-4 mb-4 mr-4 ml-4">
                                                        <span class="text-dark">
                                                            <i class="bi bi-caret-right"></i>
                                                        </span> 
                                                        Lorem Ipsum is simply dummy
                                                    </p> 
                                                    <p class="text-left mt-4 mb-4 mr-4 ml-4">
                                                        <span class="text-dark">
                                                            <i class="bi bi-caret-right"></i>
                                                        </span> 
                                                        Lorem Ipsum is simply dummy
                                                    </p> 
                                                    <a href="#Rules" id="Active-Modal-Rules" class="text-left mt-6 mb-4 mr-4 ml-4">
                                                        Ver todas las reglas...
                                                    </a> 

                                                </div>                                                    

                                            </div>
                                        </div>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>

            </div>
        </div>

        <div class="modal fade" id="Modal-Rules" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-12">
                                <h1 class="h5 text-center  mt-2 mb-2 mr-2 ml-2" id="Rules">
                                    <span class="text-dark">
                                        <i class="bi bi-exclamation-circle"></i>
                                    </span> 
                                    REGLAS DEL PLAN
                                </h1>   
                            </div>     
                        </div>

                        <div class="row">

                            <div class="col-12">

                                <p class="text-left mt-4 mb-4 mr-4 ml-4">
                                    <span class="text-dark">
                                        <i class="bi bi-caret-right"></i>
                                    </span> 
                                    Lorem Ipsum is simply dummy
                                </p> 
                                <p class="text-left mt-4 mb-4 mr-4 ml-4">
                                    <span class="text-dark">
                                        <i class="bi bi-caret-right"></i>
                                    </span> 
                                    Lorem Ipsum is simply dummy
                                </p> 
                                <p class="text-left mt-4 mb-4 mr-4 ml-4">
                                    <span class="text-dark">
                                        <i class="bi bi-caret-right"></i>
                                    </span> 
                                    Lorem Ipsum is simply dummy
                                </p>

                            </div>                                                    

                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="Close-Modal-Rules" data-dismiss="modal">
                            Close the window
                        </button>
                    </div>
                </div>
            </div>
        </div>
    <!-- INFO PLAN End -->

    <!-- MAS INFORMACION DEL PLAN -->
      <div class="container-xxl py-5">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="card border-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col-12">
                      <h2 class="h3 mb-4 mt-2 ml-2 mr-2">
                        <span class="text-warning">
                          <i class="bi bi-stars"></i>
                        </span> Conoce un poco más
                      </h2>
                    </div>
                    <div class="col-12">
                      <p class="">
                        Con 5 piscinas al aire libre, el Riu Dunamar All Inclusive está situado frente a Playa Costa Mujeres, en Cancún. La propiedad cuenta con el Splash Water World, un parque acuático con toboganes, además de régimen all inclusive 24h.
                      </p>
                    </div>
                    <div class="col-12">
                      <p class="mt-4 mb-4 text-dark">
                        Necesitas saber:
                      </p>
                      <p class=""><i class="bi bi-dot"></i> El hotel está a 19,5 km del Centro de Cancún.</p>
                      <p class=""><i class="bi bi-dot"></i> El hotel está a 19,5 km del Centro de Cancún.</p>
                      <p class=""><i class="bi bi-dot"></i> El hotel está a 19,5 km del Centro de Cancún.</p>
                      <p class=""><i class="bi bi-dot"></i> El hotel está a 19,5 km del Centro de Cancún.</p>
                    </div>
                    <div class="col-12">
                      <p class="mt-4 mb-4 ">
                        El huésped podrá disfrutar de opciones de restaurantes, con variedad de comidas de la cocina asiática, italiana, gourmet y carnes. Además, el restaurante principal ofrece el desayuno en el estilo continental y todavía hay el swin-up bar, en la piscina.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <hr>
            </div>
          </div>
        </div>
      </div>
    <!--  -->

    <!-- ITINERARIO DEL VIAJE -->
      <div class="container-xxl py-5">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="card border-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col-12">
                      <h2 class="h3 mb-4 mt-2 ml-2 mr-2">
                        <span class="text-warning">
                          <i class="bi bi-clipboard2-heart"></i>
                        </span> Itinerario
                      </h2>
                    </div>
                    <div class="col-md-4 col-12">
                      <p class="mt-4 mb-4 text-dark">
                        Necesitas saber:
                      </p>
                      <p class=""><i class="bi bi-dot"></i> El hotel está a 19,5 km del Centro de Cancún.</p>
                      <p class=""><i class="bi bi-dot"></i> El hotel está a 19,5 km del Centro de Cancún.</p>
                      <p class=""><i class="bi bi-dot"></i> El hotel está a 19,5 km del Centro de Cancún.</p>
                      <p class=""><i class="bi bi-dot"></i> El hotel está a 19,5 km del Centro de Cancún.</p>
                    </div>
                    <div class="col-md-4 col-12">
                      <p class="mt-4 mb-4 text-dark">
                        Necesitas saber:
                      </p>
                      <p class=""><i class="bi bi-dot"></i> El hotel está a 19,5 km del Centro de Cancún.</p>
                      <p class=""><i class="bi bi-dot"></i> El hotel está a 19,5 km del Centro de Cancún.</p>
                      <p class=""><i class="bi bi-dot"></i> El hotel está a 19,5 km del Centro de Cancún.</p>
                      <p class=""><i class="bi bi-dot"></i> El hotel está a 19,5 km del Centro de Cancún.</p>
                    </div>
                    <div class="col-md-4 col-12">
                      <p class="mt-4 mb-4 text-dark">
                        Necesitas saber:
                      </p>
                      <p class=""><i class="bi bi-dot"></i> El hotel está a 19,5 km del Centro de Cancún.</p>
                      <p class=""><i class="bi bi-dot"></i> El hotel está a 19,5 km del Centro de Cancún.</p>
                      <p class=""><i class="bi bi-dot"></i> El hotel está a 19,5 km del Centro de Cancún.</p>
                      <p class=""><i class="bi bi-dot"></i> El hotel está a 19,5 km del Centro de Cancún.</p>
                    </div>
                  </div>
                </div>
              </div>
              <hr>
            </div>
          </div>
        </div>
      </div>
    <!--  -->
<?php
    include_once('static/templeate/template-ends.php');
?>
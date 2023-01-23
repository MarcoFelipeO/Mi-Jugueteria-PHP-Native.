<?php
	include_once('static/templeate/start-template.php');
  include_once('static/templeate/landscape_menu.php');
?>
    <!-- Carousel Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(<?php echo constant('URL'); ?>public/FrontEnd/templeate/img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">
                        <?php echo $this->Module; ?>
                    </h1>
                </div>
            </div>
        </div>
    <!-- Carousel End -->

    <!-- Booking Start -->
        <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <form action="<?php echo constant('URL').'search/destinations/'; ?>" method="GET">
                    <div class="bg-white shadow" style="padding: 35px;">
                        <div class="row g-2">
                                <div class="col-md-10">
                                    <div class="row g-2">
                                        <div class="col-md-3">
                                            <div class="date" id="date1" data-target-input="nearest">
                                                <input type="text" class="form-control datetimepicker-input" name="Check-In" 
                                                placeholder="Check in" data-target="#date1" data-toggle="datetimepicker">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="date" id="date2" data-target-input="nearest">
                                                <input type="text" class="form-control datetimepicker-input" name="Check-Out" 
                                                placeholder="Check out" data-target="#date2" data-toggle="datetimepicker">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-select" name="Option">
                                                <option value="0">Destinos</option>
                                              <?php

                                                if(empty($this->Tourist_Areas)){
                                                  echo '
                                                    <option value="0" selected>No hay resultados.</option>
                                                  ';
                                                }else{
                            
                                                  foreach($this->Tourist_Areas as $row):
                                                    $Item = new tourist_areas();
                                                    $Item = $row; 

                                                    $ID   = $Item->ID;
                                                    $Name = $Item->Name;

                                                    if($this->ID_Zone == $ID){
                                                        echo '
                                                            <option value="'.$ID.'" selected>'.$Name.'</option>
                                                        ';
                                                        }else{
                                                        echo '
                                                            <option value="'.$ID.'">'.$Name.'</option>
                                                        ';
                                                    }

                                                  endforeach;
                                                } 
                                              ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                                </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <!-- Booking End -->

    <!-- Zones Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-5">Explore the <span class="text-primary text-uppercase">mayan world</span></h1>
                </div>
                <div class="row g-4">
                    <!-- ITEMS -->
                    <?php

                        if(empty($this->List_Tourist_Areas)){
                            echo '
                                No hay resultados.
                            ';
                        }else{
                            
                            foreach($this->List_Tourist_Areas as $row):
                                $Item = new zone_list();
                                $Item = $row; 

                                $ID   = $Item->ID;
                                $Name = $Item->Name;
                                $Call_Action = $Item->Call_Action;
                                $Photo_Cover = $Item->Photo_Cover;
                    ?>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="room-item shadow rounded overflow-hidden">
                                        <div class="position-relative">
                                            <img class="img-fluid" src="<?php echo constant('CDN').$Photo_Cover; ?>" alt="">
                                        </div>
                                        <div class="p-4 mt-2">
                                            <div class="d-flex justify-content-between mb-3">
                                                <h5 class="mb-0"><?php echo $Name; ?></h5>
                                                <div class="ps-2">
                                                </div>
                                            </div>
                                            <div class="d-flex mb-3">
                                            </div>
                                            <p class="text-body mb-3">
                                                <?php 
                                                    if(!empty($Call_Action)){
                                                        echo $Call_Action;
                                                    }else{
                                                        echo "No hay información disponible.";
                                                    }
                                                ?>    
                                            </p>
                                            <div class="d-flex justify-content-between">
                                                <a href="<?php echo constant('URL').'search/destinations/?Option='.$ID; ?>" class="btn btn-sm btn-primary rounded py-2 px-4">
                                                    View Detail
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    <?php                                     
                            endforeach;
                        } 
                    ?>
                </div>
            </div>
        </div>
    <!-- Zones End -->
<?php
    include_once('static/templeate/template-ends.php');
?>
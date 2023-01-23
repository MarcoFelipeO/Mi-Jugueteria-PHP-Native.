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

    <!-- Info Zone Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h1 class="mb-4"><?php echo $this->Name_Tourist_Area; ?></h1>
                        <p class="mb-4"><?php echo $this->Call_Action_Area; ?></p>
                        <div class="row g-3 pb-4">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-3">

                            <?php

                              if(empty($this->Photo_Gallery)){
                                #   No hay fotos en la galeria
                                echo '';
                              }else{

                                $suma=0;
                                foreach($this->Photo_Gallery as $row):
                                  $Item = new gallery_zone();
                                  $Item = $row; 

                                  $Pk = $Item->Pk;
                                  $Creation_Date = $Item->Creation_Date;
                                  $Time_Creation = $Item->Time_Creation;
                                  $File_Name   = $Item->File_Name;
                                  $suma+=1;
                                  $class1 = 'class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" style="margin-top: 25%;" ';
                                  $class2 = 'class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" ';
                                  $class3 = 'class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s"';
                                  $class4 = 'class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s"';
                            ?>
                               <div class="col-6 text-end">
                                    <img 
                                        <?php 
                                            if($suma == 2){
                                                echo $class2;
                                            }elseif($suma == 3){
                                                echo $class3;
                                            }elseif($suma == 4){
                                                echo $class4;
                                            }else{echo $class1;} 
                                        ?> src="<?php echo constant('CDN').$File_Name; ?>">
                                </div>
                            <?php
                                endforeach;
                              }#  Finaliza el if else
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Info Zone End -->

    <!-- Area map Start -->
        <?php

            if(empty($this->Area_Map)){
                #   No hay mapa
                echo '';
            }else{

        ?>
                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="row g-4">
                            <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                <div class="position-relative rounded w-100 h-100" frameborder="0" style="min-height: 350px; border:0;" aria-hidden="false" tabindex="0">
                                   <?php echo $this->Area_Map; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
            } # Fin del else
        ?>
    <!-- Area map End -->

    <!-- ROW -->
        <?php
            if(!empty($this->Point_Interaction))
            {
                echo '
                    <div class="container-xxl py-5">
                      <div class="container">
                        <div class="row g-4">
                ';
            }
        ?>
                            <div class="col-lg-8 col-md-8 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="service-item rounded">
                                    <p class="h5"><?php echo $this->History_Area; ?></p>
                                </div>
                            </div>
                            <!-- Point Interaction Start -->
                            <?php

                                if(empty($this->Point_Interaction)){
                                    #   No hay puntos de interaccion
                                    echo '';
                                }else{

                            ?>

                                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="service-item rounded">
                                            <p class="h5">Puntos de interacción</p>
                                            <hr>
                                            <?php

                                                foreach($this->Point_Interaction as $row):
                                                    $Item = new points_interaction_area_list();
                                                    $Item = $row; 

                                                    $Icon = $Item->Icon;
                                                    $Name = $Item->Name;
                                            ?>
                                                    <p class="h6 text-dark font-weight-bold ">
                                                        <span>
                                                            <?php echo $Icon; ?>    
                                                        </span> 
                                                        <?php echo $Name; ?>
                                                    </p>
                                            <?php
                                                endforeach;
                                            ?>
                                        </div>
                                    </div>

                            <?php
                                } # Fin del else
                            ?>
                            <!-- Point Interaction End -->
        <?php
            if(!empty($this->Point_Interaction))
            {
                echo '
                        </div>
                    </div>
                </div>
            ';
            }
        ?> 

        <div area-plan-data="<?php echo $this->ID_Zone; ?>" id="area-plan"></div>

<?php
    include_once('static/templeate/template-ends.php');
?>
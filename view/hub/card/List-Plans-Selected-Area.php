<!-- PLANES TURISTICOS DE LA ZONA SELECCIONADA -->
<?php
    if(empty($this->list_plans_card))
    { 
        echo '';
        exit();
    }
?>

    <!-- LISTA DE PLANES -->
    <div class="container-xxl py-5">
        <div class="container">

            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
              <h6 class="section-title text-center text-primary text-uppercase">Planes</h6>
              <p></p>
            </div>

            <?php
                foreach($this->list_plans_card as $row):
                    $Item = new list_plan_card();
                    $Item = $row; 

                    $PK = base64_encode($Item->PK);
                    $Title = $Item->Title;
                    $Call_Action = $Item->Call_Action;
            ?>

                    <div class="row g-4 mt-2 mb-2">
                        <div class="col-l2 wow fadeInUp" data-wow-delay="0.1s">
                            
                              <div class="card ">
                                    <div class="card-body">
                                        <div class="row">

                                            <div class="col-md-4">
                                                <div class=" col-12 clic mb-2 mt-2 ml-4 mr-4">
                                                    <img src="https://static01.nyt.com/images/2020/10/25/realestate/19shopping1/oakImage-1602795344944-mobileMasterAt3x.jpg" class="col-md-10 col-12  rounded float-left">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="col-12 mb-4 mt-2 ml-4 mr-4">
                                                    <h5 class="mb-4 mt-4"><?php echo $Title; ?></h5> 
                                                </div>
                                                <div class="col-12 mb-4 mt-2 ml-4 mr-4">
                                                    <p class="text-body mb-0 mt-4"><?php echo $Call_Action; ?></p>
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="col-12 mb-4 mt-4 ml-4 mr-4">

                                                    <a href="<?php echo constant('URL').'search/?Urp=Plans&Plan='.$PK; ?>" class="col btn btn-dark text-capitalize  mb-4 mt-4 ml-4 mr-4" value="<?php echo $PK; ?>">
                                                        View <span class="text-lowercase">detail</span>
                                                    </a>

                                                    <!-- <button type="button" class="col btn btn-primary text-capitalize text-dark mb-4 mt-4 ml-4 mr-4 " value="<?php echo $PK; ?>">
                                                        Add <span class="text-lowercase">to</span> list
                                                    </button> -->
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                              </div>
                        </div>
                    </div>
            <?php
                endforeach;
            ?>

        </div>
    </div>

    <!-- AGREGAR A MI LISTA DE DESEOS -->
    <script></script>

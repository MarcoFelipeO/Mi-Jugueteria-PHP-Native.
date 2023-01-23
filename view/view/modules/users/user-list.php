<?php  
  $th1 = '<th class=""font-weight-semi-bold border-top-0 py-2">Usuario</th>';
  $th2 = '<th class=""font-weight-semi-bold border-top-0 py-2">Email</th>';
  $th3 = '<th class=""font-weight-semi-bold border-top-0 py-2">T/Cuenta</th>';
  $th4 = '<th class=""font-weight-semi-bold border-top-0 py-2"></th>';
  $thead      = $th1.$th2.$th3.$th4;
  $tfooter    = $th1.$th2.$th3.$th4;
?>

<!-- LISTADO DE USUARIOS -->
<table class="table text-nowrap mb-0 table-striped">
  <thead class="thead-dark">
    <tr>
      <?php echo $thead; ?>
    </tr>
  </thead>
  <tbody id="search-status">
    <?php

      if(empty($this->user_List)){
        echo '
          <tr>
            <td colspan="4" class="text-center">
              <h1 class="h2 text-dark">No hay resultados</h1>
            </td>
          </tr>
        ';
      }else{
        foreach($this->user_List as $row):
          $Item = new user_list();
          $Item = $row; 

          $Pk         = $Item->Pk;
          $User_Name  = $Item->Name.' '.$Item->LastName;
          $Email      = $Item->Email;
          $Account_Type = $Item->Account_Type;

    ?>
          <tr>
            <td class="align-middle py-3">
              <div class="d-flex align-items-center">
                <?php echo $User_Name; ?>
              </div>
            </td>
            <td class="py-3"><?php echo $Email; ?></td>
            <td class="py-3">
              <span class="badge badge-pill badge-primary">
                <?php echo $Account_Type; ?>    
              </span>
            </td>
            <td class="py-3">
              <div class="position-relative">
                <a class="link-dark d-inline-block" href="<?php echo constant('URL').'users/?Ins=Form-Updt-User&Key='.$Pk; ?>">
                  <i class="gd-pencil icon-text"></i>
                </a>
              </div>
            </td>
          </tr>
    <?php
        endforeach;
      }#  Finaliza el if else
    ?>
  </tbody>
  <tfoot class="thead-dark">
    <tr>
      <?php echo $thead; ?>
    </tr>
  </tfoot>
</table>

<!-- PAGINACION -->

<div class="card-footer d-block d-md-flex align-items-center d-print-none">

  <nav class="d-flex ml-md-auto d-print-none" aria-label="Pagination">
      <?php

            $links = 3;
            $list_class = "pagination justify-content-center font-weight-semi-bold mb-0";
            //$this->page;
            $last       = $this->ListBTN;

            /*********************************************************************************/
                /**/  $start      = ( ( $this->Page - $links ) > 0 ) ? $this->Page - $links : 1;
                /**/  //echo "<br><hr>";
                /**/  $end        = ( ( $this->Page + $links ) < $last ) ? $this->Page + $links : $last;
                /**/  //echo "<br><hr>";
            /*********************************************************************************/

            $html       = '<ul class="' . $list_class . '">';
            //echo "<br><hr>";  
            $class      = ( $this->Page == 1 ) ? "disabled" : "";
            //echo "<br><hr>";

            $html       = '<ul class="' . $list_class . '">';
            //echo "<br><hr>";  
            $class      = ( $this->Page == 1 ) ? "disabled" : "";
            
            # VOLVER A LA PÁGINA ANTERIOR
            $html       .= '
              <li class="page-item d-none d-md-block ' . $class . '">
                <button type="button" class="page-link btnPagination" value="' . ( $this->Page - 1 ) . '" aria-label="Previous">
                  <i class="gd-angle-left icon-text icon-text-xs d-inline-block"></i>
                </button>
              </li>
            ';
            
            # INICIA PAGINACION POR DEFAULT
            if( $start > 1 )
            {

              # BOTON 1 POR DEFAULT
              $html   .= '
                <li class="page-item d-none d-md-block ">
                  <button type="button" class="page-link btnPagination" value="1"  data-dt-page-to="0">1</button>
                </li>
              ';

              # DIVISOR DE TODOS LOS BOTONES

              $html   .= '
                <li class="page-item d-none d-md-block disabled">
                  <button type="button" class="page-link" data-dt-page-to="0">
                    ...
                  </button>
                </li>
              ';
            }

            // RENDERIZADO DE LAS PAGINAS
            for( $i = $start; $i <= $end; $i++ )
            {

              $class  = ( $this->Page == $i ) ? "active" : "";

              $html   .= '
                <li class="page-item d-none d-md-block ' . $class . '">
                  <button type="button" class="page-link btnPagination" data-dt-page-to="0" value="' . $i . '">' . $i . '</button>
                </li>
              ';

            }
            
            # FINALIZA PAGINACION
            if( $end < $last )
            {
              # DIVISOR DE TODOS LOS BOTONES

              $html   .= '
                <li class="page-item d-none d-md-block disabled">
                  <button type="button" class="page-link" data-dt-page-to="0">
                    ...
                  </button>
                </li>
              ';

              # SIGUIENTES PAGINAS
              $html   .= '
                <li class="page-item d-none d-md-block ">
                  <button type="button" class="page-link btnPagination" data-dt-page-to="0" value="'.$last.'">
                    '.$last.'
                  </button>
                </li>
              ';
            }
     
            $class      = ( $this->Page == $last ) ? "disabled" : "";
        
            $html       .= '
              <li class="page-item ' . $class . '">
                <button type="button" class="page-link btnPagination" value="'.( $this->Page + 1 ).'">
                  <i class="gd-angle-right icon-text icon-text-xs d-inline-block"></i>
                </button>
              </li>';
     
            $html       .= '</ul>';
     
        echo  $html;/**/

      ?>
  </nav>

</div>

<!-- PAGINAR LISTA DE USUARIOS REGISTRADOS -->
<script src="<?php echo constant('URL'); ?>public/Frontend/js/users/query/paginate-list-of-registered-users.js"></script>
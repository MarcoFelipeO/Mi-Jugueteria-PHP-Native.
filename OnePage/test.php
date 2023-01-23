 <h1>Test</h1>
 <?php
    

    #   RECORDEMOS QUE PARA PODER USAR LAS SESIONES ESTAS TIENES QUE SER CREADAS EN TODOS LOS ARCHIVOS DEL 
    #   SOFTWARE DE LO CONTRARIO ESTAS SE PERDERAN
    #   BASTA CON UNICAMENTE INVOCAR LA FUNCION POR DEFULT DE PHP -> session_start()

    #   RECOGEMOS LOS DATOS DE NUESTRO FORMULARIO
    echo $documento_seleccionado = $_GET['documento_seleccionado'];
    $doc_anterior = 1;
    #   VERIFICAMOS QUE NUYESTRO VALOR PRINCIPAL NO 
    #   VENGA VACIO    

    if(!empty($_GET['documento_seleccionado']))
    {

        # EL VALOR NO LLEGÓ VACIO 
        # AQUI DENTRO IRAN NUESTRAS OPERACIONES

        session_start();
        $_SESSION['dataDocumento'] = array();
        $_SESSION['dataDocumento']['ID_Documento'] = $documento_seleccionado;
        $_SESSION['dataDocumento']['EDAD'] = 79;

        #   MOSTRAMOS DE FORMA BONITA LOS DATOS QUE VAMOS A ALMACENAR EN CACHE USANDO 
        # DELLA SESION QUE LLEVA POOR NOMBRE -> dataDocumento
        // echo "<pre>";
        // print_r($_SESSION['dataDocumento']);
        // echo "</pre>";

        if($_SESSION['dataDocumento']['ID_Documento'] == $doc_anterior)
        {
            #   EL USUARIO SELECCIONO EL MISMO DOPCUMENTO 
            # NO HACEMOS NADA
            echo 'NO HACER NADA, MANTENER LOS VALORES';
            exit();
        }else{
            #   EL USUARIO SELECCIONO UN DOCUMENTO DISTINTO
            #   PROCEDEMOS A VACIAR LOS VALORES ANTERIORES Y LE METEMOS LOS NUEVOS

            session_unset();
            session_destroy();

            #  ESTAMOS INCIANDO NUEVOS VALORES A LA CACHE
            session_start();
            $_SESSION['dataDocumento'] = array();
            $_SESSION['dataDocumento']['ID_Documento'] = $documento_seleccionado;
            $_SESSION['dataDocumento']['EDAD'] = 79;
            echo "nuevo doc";
            exit();
        }

    }

    #   EL USUARO NO SELECCIONO NINGUN DOCUMENTO
    #   INSERTA EL CODIGO U OPERACION QUE QUIERES QUE SE EJECUTE CUANDO EL USUARIO
    #   NO SELECCIONE UN DOCUMENTO
 echo "hiciste algo mal";

?>
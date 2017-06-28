<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Nube</title>
        <style type="text/css">
            body, html
            {
                margin: 0; padding: 0; height: 100%; overflow: hidden;
            }

            #content
            {
                position:absolute; left: 0; right: 0; bottom: 0; top: 0px; 
            }
        </style>
    </head>
    <body>
        <div id="content">
            <iframe width="100%" height="100%" frameborder="0" src="http://192.168.1.11/owncloud/index.php" />
        </div>
        <?php 
    #// Asignando direccion IP a variable IP_ADDRESS
    $IP_ADDRESS = $_SERVER[REMOTE_ADDR];

    #// Imprimiendo resultados en la Pagina Web
    echo "Su IP es $_SERVER[REMOTE_ADDR]";

    ##// Eso es todo... Terminado!

?>
    </body>		 		
    
</html>
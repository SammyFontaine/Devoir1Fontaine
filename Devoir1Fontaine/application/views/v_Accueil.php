<!DOCTYPE html>
<html>
    <head>
        <title>Supermarche</title>
        <meta charset="UTF-8">
        <script type="text/javascript" src="Jquery/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="JS/lesFonctions.js"></script>
        
        <script type="text/javascript">
       
    $
   (
        function()
            {
                $("#lstSecteurs").change(function(){ 
                    getLesRayons($(this).val());
                    });
            }
   ),
   $
   (
        function()
            {
                $()
                getLesEmployes();
            }
    ),
    $
//    (
//        function()
//            {
//                getNombresHeures();
//
//            }
//    )
;
    
         </script>
    </head>

    <body>
        <h2>Choix du secteur</h2>
        <select id="lstSecteurs">
        <?php 
        foreach ($lesSecteurs as $secteur) {
       
            echo "<option id='opt1' value='".$secteur->numS."'>".$secteur->nomS."</option>";
        }
        ?>
        </select>

        <h2>Choix du rayon</h2>
        <div id="divRayons"></div>
        <div id="divEmployes"></div>
        <!--<div id="divHeures"></div>-->

    </body>
</html>
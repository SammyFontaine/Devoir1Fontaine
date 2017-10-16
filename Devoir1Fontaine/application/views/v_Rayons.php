<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    <body>
      <select id="lstRayons" >
        <?php 
            foreach ($lesRayons as $rayon) {
                echo "<option id='opt1' value='".$rayon->numR."'>".$rayon->nomR."</option>";
        }
        ?>

        </select>
    </body>
</html>
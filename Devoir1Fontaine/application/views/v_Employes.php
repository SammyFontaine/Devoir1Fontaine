<!DOCTYPE html>
<html>
    
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    <body>
          <div id="tableauEmp">


    <table cellspacing="4px" cellpadding="4px;" rules="all" style="border:solid 2px black;">
        <h2> Liste des employes</h2>
        <tr> 


              <th>Prénom employé</th>
              <th>Date</th>


        </tr>

        <?php 

        foreach($lesEmployes as $employes){
            echo "<tr>";


            echo"<td>".$employes->prenomE."</td>";
//            echo"<td>".$employes->date."</td>";
//            echo"<td>".$employes->temps."</td>";
//            echo"<td>".$employes->numE."</td>";

            echo "</tr>";
        }
        ?>

    </table> 
          </div>
    </body>
</html>
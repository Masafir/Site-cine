<?php

include('../template/header.html');
include('../template/nav.html');

?>
</header>
<main>
<section>
  <p>
  <h2>LES FILMS EN SALLE</h2>
  <h3><?php 
      //Date du jour
      echo date('d M Y');
  ?>
  </h3>
  <table> 
  <thead> Horaires de validité : </thead> 
  <tr>
  <th>Titre</th>
  <th>10:00</th>
  <th>12:00</th>
  <th>14:00</th>
  <th>16:00</th>
  <th>18:00</th>
  <th>20:00</th>
  <th>22:00</th>
  <th>00:00</th> 
  </tr>
  
  <?php
    include('../inc/filmsAssociatif.php');
    
    foreach ($filmsAssociatif as $films)
    {
      echo '<tr>';
        echo '<td><a href="../../critiques/php/template/'.$films['url'].'.php">'.$films['nom'].'</a> ('.$films['année'].')'.'</td>'.PHP_EOL;
        
        foreach ($films['horaires'] as $horaire)
        {echo('<td>');
          if($horaire===true)
          {
            echo'✓';
          }
          else {
            echo('𐄂');
          }
          echo('</td>');
        }
        echo'</tr>';
    }
   
    
  ?>
   </table>
  </p>
</section>
</main>
<?php
include('../inc/footer.php');
?>
</body>
</html>

<?php
  include('../template/header.html');
  include('../template/nav.html');
 
  //tableau
  $ages = [];
  $tarifs=['enfant' => 4.5, 'reduit' => 6.8, 'plein' => 8.3];
  ?>
  </header>
  <main>
    <section id="tarifs">
      <h2>Tarifs</h2>
        <div class="flex">
          <ul>
          <?php
            
            foreach ($tarifs as $nom => $tarif)
            {
              echo('<li>Tarif '.ucfirst($nom).' : '.$tarif.' &euro;</li>');
              
            }
          ?> 
          </ul>
          <ul>
            <li>Abonnement 5 places : -10%</li>
            <li>Abonnement 5 places -25ans : -20%</li>
          </ul>
        </div>
        <p>
          Tarif Réduit pour les personnes de + de 60 ans et de moins de 16 ans<br>
          Tarif Enfant pour les - de 14 ans
        </p>
      
      <h2>Selon votre âge :</h2>
      <p>
        <form action="tarifs.php" method="get">
        <label>Inserer votre age :</label>
        <input type='text' name='age'value='0'>
        <input type="submit">
        </form>
        <?php
        
        // variable utile dans le php calcul_montant
          
          //génération du tableau
          $age=$_GET['age'];
            // $ages[$n]=$n+3;
            include('../inc/calcul_montant.php');
            if($age<25) {
              $montant=$montant * 0.2; // -80%
              if (strlen($montant)<=3){
                echo'Grâce à votre abonnement,si votre âge est : '.$age.'ans = '.$montant.'0&euro;<br>'.PHP_EOL;
              }
              else{
                echo'Grâce à votre abonnement,si votre âge est : '.$age.'ans = '.$montant.'&euro;<br>'.PHP_EOL;
              }
            }
            else {
              $montant=$montant * 0.5; // -50%
              
              if (strlen($montant)<=3){
                echo'Grâce à votre abonnement,si votre âge est : '.$age.'ans = '.$montant.'0&euro;<br>'.PHP_EOL;
              }
              else{
                echo'Grâce à votre abonnement,si votre âge est : '.$age.'ans = '.$montant.'&euro;<br>'.PHP_EOL;
              }
              
            }

          // Boucle for du calcul_montant
          /* for($i=0;$i<count($ages);$i++)
          {
          $age=$ages[$i];
          if($i%2==0)
            {
              
            }
          else {
            $phrase='Si votre âge Marie est : '.$age.'ans = '.$montant.'&euro;<br>'.PHP_EOL;
          }
          include('../inc/calcul_montant.php');

          }  */

        // Boucle while

        /* $age=1;
        while ($age<=99){
          //on rajoute le code du php calcul montant
          include('../inc/calcul_montant.php');
          $age++;
        } */
        
        
        ?>
      </p>
    </section>
  </main>
  <?php
    include('../inc/footer.php');
 ?>

</body>
</html>
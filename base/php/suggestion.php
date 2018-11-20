<?php
include('../template/header.html');
include('../template/nav.html');
include('../inc/filmsAssociatif.php');
?>
<form action="suggestion.php" method="get">
    <label> <h2>Quelle catégorie préférez-vous ? </h2> </label>
    <hr>
   <ul>
    <li><input type="radio" name='category' value="action">Action</li>
    
    <li><input type="radio" name='category' value="fantaisie">Fantaisie</li>
    
    <li><input type="radio" name='category' value="thriller">Thriller</li>
    
    <li><input type="radio" name='category' value="drame">Drame</li>
    
    <li><input type="radio" name='category' value="horreur">Horreur</li>
    
    <li><input type="radio" name='category' value="enfant">Enfant</li>
</ul>

    <br>
    
    <input type="submit" name='confirmer'>
    
</form>
<?php

$occ=0;
$chain='on vous conseille ce film : ';
if(isset($_GET['category']))
{
    foreach($filmsAssociatif as $film)
    {
        if ($film['categorie']==$_GET['category'])
        {
            $chain.=$film['nom'].' ';  
        }
       
    }
    echo $chain;
}
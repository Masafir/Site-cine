<?php
include("header.php");
include("../inc/donnees.php");

/* 
<nav>
          <ul class="left__nav">
            <li class="left__nav-item"><a href="" class="left__nav-link">Plan du site</a></li>
            <li class="left__nav-item"><a href="" class="left__nav-link">Mentions légales</a></li>
            <li class="left__nav-item"><a href="" class="left__nav-link">Contact</a></li>
          </ul>
        </nav>
      </header> */
?>
<nav>
    <ul class="left__nav">
<?php

foreach ($tableau2 as $nav)
{
    echo('<li class="left__nav-item"><a href="'.$nav['lien'].'" class="left__nav-link">'.$nav['nom'].'</a></li>');

} 

?>
</ul>
</nav>
</header>
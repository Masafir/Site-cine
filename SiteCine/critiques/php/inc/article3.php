<?php
    $image='../../images/student.jpg';
    include('../template/nav.php');
    include('../template/post.html');
    include('donnees.php');


    echo('<a href="#" class="'.$article["article3"]["categorie"]["class"].'">'.$article["article3"]["categorie"]["nom"].'</a><h3>'.$article["article3"]["titre"].'</h3><div class="post__meta"><img class="post__author-icon" src="'.$article["article3"]["image"].'" alt=""><strong class="post__author"> '.$article["article3"]["auteur"] .' </strong> '.$article["article3"]['date_de_pub'].' </div><p>'.$article["article3"]['texte'].'</p><a href="../template/index.php" class="post__link"]>Back Home</a></article></div>');
?>
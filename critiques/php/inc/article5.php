<?php
    $image='../../images/student.jpg';
    include('../template/nav.php');
    include('../template/post.html');
    include('donnees.php');

    echo('<a href="#" class="'.$article["article5"]["categorie"]["class"].'">'.$article["article5"]["categorie"]["nom"].'</a><h3>'.$article["article5"]["titre"].'</h3><div class="post__meta"><img class="post__author-icon" src="'.$article["article5"]["image"].'" alt=""><strong class="post__author"> '.$article["article5"]["auteur"] .' </strong> '.$article["article5"]['date_de_pub'].' </div><p>'.$article["article5"]['texte'].'</p><a href="../template/index.php" class="post__link"]>Back Home</a></article></div>');
?>
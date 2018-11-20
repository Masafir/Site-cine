<?php
    $image='../../images/student.jpg';
    include('../template/nav.php');
    include('../template/post.html');
    include('donnees.php');

    echo('<a href="#" class="'.$article["article2"]["categorie"]["class"].'">'.$article["article2"]["categorie"]["nom"].'</a><h3>'.$article["article2"]["titre"].'</h3><div class="post__meta"><img class="post__author-icon" src="'.$article["article2"]["image"].'" alt=""><strong class="post__author"> '.$article["article2"]["auteur"] .' </strong> '.$article["article2"]['date_de_pub'].' </div><p>'.$article["article2"]['texte'].'</p><a href="../template/index.php" class="post__link"]>Back Home</a></article></div>');
?>
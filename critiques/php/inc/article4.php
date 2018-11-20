<?php
    $image='../../images/student.jpg';
    include('../template/nav.php');
    include('../template/post.html');
    include('donnees.php');

    echo('<a href="#" class="'.$article["article4"]["categorie"]["class"].'">'.$article["article4"]["categorie"]["nom"].'</a><h3>'.$article["article4"]["titre"].'</h3><div class="post__meta"><img class="post__author-icon" src="'.$article["article4"]["image"].'" alt=""><strong class="post__author"> '.$article["article4"]["auteur"] .' </strong> '.$article["article4"]['date_de_pub'].' </div><p>'.$article["article4"]['texte'].'</p><a href="../template/index.php" class="post__link"]>Back Home</a></article></div>');
?>
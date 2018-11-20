<?php
    $image='../../images/student.jpg';
    include('../template/nav.php');
    include('../template/post.html');
    include('donnees.php');

    echo('<a href="#" class="'.$article["article6"]["categorie"]["class"].'">'.$article["article6"]["categorie"]["nom"].'</a><h3>'.$article["article6"]["titre"].'</h3><div class="post__meta"><img class="post__author-icon" src="'.$article["article6"]["image"].'" alt=""><strong class="post__author"> '.$article["article6"]["auteur"] .' </strong> '.$article["article6"]['date_de_pub'].' </div><p>'.$article["article6"]['texte'].'</p><a href="../template/index.php" class="post__link"]>Back Home</a>AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA</article></div>');;
?>
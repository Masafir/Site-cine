<?php 
$image='../../images/student.jpg';
include('../template/nav.php');
include('../template/post.html');
include('donnees.php');

/* 
<h3>Lorem ipsum dolor sit amet</h3>
<div class="post__meta">
<img class="post__author-icon" src="../../images/icon-dar.png" alt="">
<strong class="post__author">John Marchill</strong>
<time datetime="2018-03-27">le 27 mars 2018</time>
</div> */

echo('<a href="#" class="'.$article["article1"]["categorie"]["class"].'">'.$article["article1"]["categorie"]["nom"].'</a><h3>'.$article["article1"]["titre"].'</h3><div class="post__meta"><img class="post__author-icon" src="'.$article["article1"]["image"].'" alt=""><strong class="post__author"> '.$article["article1"]["auteur"] .' </strong> '.$article["article1"]['date_de_pub'].' </div><p>'.$article["article1"]['texte'].'</p><a href="../template/index.php" class="post__link"]>Back Home</a></article></div>');
?>
